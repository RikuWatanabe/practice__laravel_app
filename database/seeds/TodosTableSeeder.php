<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //クエリビルダの記述。DBファサードのtableメソッドを使う。tableメソッドは指定したテーブルに対するクエリビルダインスタンスを返す。
        DB::table('todos')->truncate(); //truncateメソッド。全レコードを削除し、自動増分のIDを0にリセットする。
        DB::table('todos')->insert([    //insertメソッド。データベーステーブルにレコードを挿入する。「カラム名 => 値の配列」　で指定する。
            [
                'title'      => 'Laravel Lessonを終わらせる',
                'created_at' => Carbon::create(2018, 1, 1), //Carbon::はPHPで使用できる日付操作用のライブラリ。laravelに標準搭載されている。
                'updated_at' => Carbon::create(2018, 1, 4),
            ],
            [
                'title'      => 'レビューに向けて理解を深める',
                'created_at' => Carbon::create(2018, 2, 1),
                'updated_at' => Carbon::create(2018, 2, 5),
            ],
        ]);
        
    }
}
