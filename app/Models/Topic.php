<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Topic extends Model
{
    use HasFactory;

    public function getLatestTopics()
    {
        //直近５つのトピック記事を取得する
        return DB::table('topic')->
        whereDate('created_at','asc')->
        take(5)->get();
    }
}
