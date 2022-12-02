<template>

  <div>
    都道府県：<input type="text" v-model="pref"><br>
    市区町村：<input type="text" v-model="city"><br>
    <button v-on:click="search(this.isbn,pref,city)">検索</button>
  </div>

  <div>
    <div v-for="(book) in this.books" :key="book">
      <div v-for="(boo, ind) in book" :key="ind">
        <p v-for="(bo, i) in book[ind].libkey" :key="i">
          {{ i }} {{ bo }}
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      systemIds: [],
      books: null,
      pref: '',
      city: ''
    }
  },
  name: 'HelloWorld',
  props: {
    // bladeから書籍のisbnをvueに渡す
    isbn: Number,
  },
  methods: {
    search: function (isbn, pref, city) {
      // 初期化
      this.systemIds = [];
      this.books = null;

      //都道府県と市町村を受け取って図書館一覧を取得
      fetch(`https://api.calil.jp/library?appkey=78b83c7835eed808184208dd89d2663c&pref=${pref}&city=${city}&format=json&callback=`)
          .then((response) => {
            return response.json()
          })
          .then((data) => {
            for (const e of data) {
              //ユニークなシステムid配列を作成
              if (!this.systemIds.includes(e.systemid)) {
                this.systemIds.push(e.systemid)
              }
            }
          })
          .then(() => {
            //図書館一覧からユニークのシステムIDを取得して再検索 例：systemid=Tokyo_Edogawa,Aomori_Pref
            fetch(`https://api.calil.jp/check?appkey=78b83c7835eed808184208dd89d2663c&isbn=${isbn}&systemid=${this.systemIds.join(',')}&format=json&callback=no`)
                .then((response) => {
                  return response.json()
                })
                .then(async (data) => {
                  if (data.continue === 1) {
                    let is_continue = true;

                    while (is_continue) {
                      fetch(`https://api.calil.jp/check?session=${data.session}&appkey=78b83c7835eed808184208dd89d2663c&format=json&callback=no`)
                          .then((res) => {
                            return res.json()
                          })
                          .then((data_) => {
                            if (data_.continue === 0) {
                              this.books = data_.books
                              is_continue = false
                            }
                          })
                      await new Promise(s => setTimeout(s, 2000))
                    }
                  } else {
                    this.books = data.books
                  }
                })
          })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
