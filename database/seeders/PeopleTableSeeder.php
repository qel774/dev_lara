<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'taro1',
            'mail' => 'taro1@example.com',
            'age' => 12,
        ];
        DB::table('people')->insert($params);

        $params = [
            'name' => 'taro2',
            'mail' => 'taro2@example.com',
            'age' => 13,
        ];
        DB::table('people')->insert($params);

        $params = [
            'name' => 'taro3',
            'mail' => 'taro3@example.com',
            'age' => 14,
        ];
        DB::table('people')->insert($params);
    }
}
