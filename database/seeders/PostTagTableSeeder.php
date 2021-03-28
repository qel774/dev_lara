<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'post_id' => 1,
            'tag_id' => 1,
        ];
        DB::table('post_tag')->insert($params);

        $params = [
            'post_id' => 1,
            'tag_id' => 2,
        ];
        DB::table('post_tag')->insert($params);

        $params = [
            'post_id' => 2,
            'tag_id' => 1,
        ];
        DB::table('post_tag')->insert($params);

    }
}
