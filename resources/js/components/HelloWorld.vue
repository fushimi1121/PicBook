<template xmlns="http://www.w3.org/1999/html">
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>都道府県</p>
            <input type="text" class="Form-Item-Input" placeholder="例）東京都" v-model="pref">
        </div>
        <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Optional">任意</span>市区町村</p>
            <input type="text" class="Form-Item-Input" placeholder="例）練馬区" v-model="city">
        </div>
        <input type="submit" class="Form-Btn" value="検索する" v-on:click="search(this.isbn,pref,city)">
    </div>
<!--    <div class="modal-input">-->
<!--        都道府県：<input type="text" v-model="pref" class="modal-input"><br>-->
<!--        市区町村：<input type="text" v-model="city" class="modal-input"><br>-->
<!--        <button v-on:click="search(this.isbn,pref,city)">検索</button>-->
<!--    </div>-->
<!--    <div>-->
<!--        <div v-for="(book) in this.books" :key="book" class="lib-area">-->
<!--            <div v-for="(boo, ind) in book" :key="ind">-->
<!--                <p v-for="(bo, i) in book[ind].libkey" :key="i" class="lib-list">-->
<!--                    {{ i }}： {{ bo }}-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div v-for="(book) in this.books" :key="book" class="lib-area">
        <table class="table_box lib-list">
        <tr>
            <th>図書館名称（俗称）</th>
            <th>貸出可否</th>
        </tr>
        </table>
        <table class="table_box lib-list" v-for="(boo, ind) in book" :key="ind">
            <tr v-for="(bo, i) in book[ind].libkey" :key="i" >
                <td>{{ i }}</td>
                <td>{{ bo }}</td>
            </tr>
        </table>
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
              console.log(`https://api.calil.jp/check?appkey=78b83c7835eed808184208dd89d2663c&isbn=${isbn}&systemid=${this.systemIds.join(',')}&format=json&callback=no`)
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
/*h3 {*/
/*  margin: 40px 0 0;*/
/*}*/

/*ul {*/
/*  list-style-type: none;*/
/*  padding: 0;*/
/*}*/

/*li {*/
/*  display: inline-block;*/
/*  margin: 0 10px;*/
/*}*/

/*a {*/
/*  color: #42b983;*/
/*}*/

.Form {
    margin-top: 80px;
    margin-left: 20px;
    margin-right: 20px;
    max-width: 720px;
}
@media screen and (max-width: 480px) {
    .Form {
        margin-top: 40px;
        margin-left: auto;
        margin-right: auto;
    }
}
.Form-Item {

    padding-top: 24px;
    padding-bottom: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 480px) {
    .Form-Item {
        padding-left: 14px;
        padding-right: 14px;
        padding-top: 16px;
        padding-bottom: 16px;
        flex-wrap: wrap;
    }
}
.Form-Item:nth-child(5) {

}
.Form-Item-Label {
    width: 100%;
    max-width: 248px;
    letter-spacing: 0.05em;
    font-weight: bold;
    font-size: 18px;
}
@media screen and (max-width: 480px) {
    .Form-Item-Label {
        max-width: inherit;
        display: flex;
        align-items: center;
        font-size: 15px;
    }
}
.Form-Item-Label.isMsg {
    margin-top: 8px;
    margin-bottom: auto;
}
@media screen and (max-width: 480px) {
    .Form-Item-Label.isMsg {
        margin-top: 0;
    }
}
.Form-Item-Label-Required {
    border-radius: 6px;
    margin-right: 8px;
    padding-top: 8px;
    padding-bottom: 8px;
    width: 48px;
    display: inline-block;
    text-align: center;
    background: #ff0000;
    color: #fff;
    font-size: 14px;
}
@media screen and (max-width: 480px) {
    .Form-Item-Label-Required {
        border-radius: 4px;
        padding-top: 4px;
        padding-bottom: 4px;
        width: 32px;
        font-size: 10px;
    }
}

.Form-Item-Label-Optional {
    border-radius: 6px;
    margin-right: 8px;
    padding-top: 8px;
    padding-bottom: 8px;
    width: 48px;
    display: inline-block;
    text-align: center;
    background: #545454;
    color: #fff;
    font-size: 14px;
}
@media screen and (max-width: 480px) {
    .Form-Item-Label-Optional {
        border-radius: 4px;
        padding-top: 4px;
        padding-bottom: 4px;
        width: 32px;
        font-size: 10px;
    }
}
.Form-Item-Input {
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 40px;
    padding-left: 1em;
    padding-right: 1em;
    height: 48px;
    flex: 1;
    max-width: 410px;
    background: #eaedf2;
    font-size: 18px;
}
@media screen and (max-width: 480px) {
    .Form-Item-Input {
        margin-left: 0;
        margin-top: 18px;
        width: 100%;
        height: 40px;
        flex: inherit;
        font-size: 15px;
    }
}
.Form-Item-Textarea {
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 40px;
    padding-left: 1em;
    padding-right: 1em;
    height: 216px;
    flex: 1;
    width: 100%;
    max-width: 410px;
    background: #eaedf2;
    font-size: 18px;
}
@media screen and (max-width: 480px) {
    .Form-Item-Textarea {
        margin-top: 18px;
        margin-left: 0;
        height: 200px;
        flex: inherit;
        font-size: 15px;
    }
}
.Form-Btn {
    border-radius: 6px;
    border-color: #F5C332;
    margin :32px auto 20px auto;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 240px;
    display: block;
    letter-spacing: 0.05em;
    background: #F5C332;
    color: #fff;
    font-weight: bold;
    font-size: 20px;
    transition: background-color .2s;
}
.Form-Btn:hover{
    background-color: #ffac01;
}
@media screen and (max-width: 480px) {
    .Form-Btn {
        margin-top: 24px;
        padding-top: 8px;
        padding-bottom: 8px;
        width: 160px;
        height: auto;
        font-size: 16px;
    }
}

.lib-area{
    margin: 80px 20px 20px 40px;
    max-width: 720px;
}
@media screen and (max-width: 480px) {
    .lib-area {
        margin-top: 40px;
        margin-left: 2px;
        margin-right: 2px;
    }
}

.lib-list{
    width: 100%;
}


h2 {
    text-align: center;
}

table {
    border-collapse: collapse;
    margin: 0 auto auto auto;
    padding: 0;
    width: 600px;
    box-shadow: 0 0 15px -6px #00000073;
}

table tr {
    background-color: #fff;
}

table th,
table td {
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}

table  th {
    width: 20%;
    font-size: 14px;
    padding: 15px;
    background-color: #FFC107;
    color:#fff;
}

table tr{
    text-align: center;
    width: 20%;
    padding: 20px 0;
    background-color: #fff;
    color:#3a3a3a;
}

table tr:hover{
    background-color: #d4faff;
}

</style>
