<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'エンタメ',
        ];
        DB::table('tags')->insert($params);

        $params = [
            'name' => 'スポーツ',
        ];
        DB::table('tags')->insert($params);

        $params = [
            'name' => '料理',
        ];
        DB::table('tags')->insert($params);

        $params = [
            'name' => 'アニメ',
        ];
        DB::table('tags')->insert($params);

    }
}
