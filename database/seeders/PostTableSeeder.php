<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'people_id' => 1,
            'title' => 'テストタイトル1',
            'body' => 'テスト記事1',
        ];
        DB::table('posts')->insert($params);

        $params = [
            'people_id' => 1,
            'title' => 'テストタイトル2',
            'body' => 'テスト記事2',
        ];
        DB::table('posts')->insert($params);

        $params = [
            'people_id' => 2,
            'title' => 'テストタイトル3',
            'body' => 'テスト記事3',
        ];
        DB::table('posts')->insert($params);
    }
}
