<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //itemsテーブルに仮にデータ入力
        $param = [
            'id' => '1',
            'title' => '適当なたいとる入力1',
            'user_id' => '4',
            'detail' => '1kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '10000',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
        $param = [
            'id' => '2',
            'title' => '2適当なたいとる入力',
            'user_id' => '4',
            'detail' => '2kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '1000',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
        $param = [
            'id' => '3',
            'title' => '3適当なたいとる入力',
            'user_id' => '4',
            'detail' => '3kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '3000',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
        $param = [
            'id' => '4',
            'title' => '4適当なたいとる入力',
            'user_id' => '1',
            'detail' => '4kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '4000',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
        $param = [
            'id' => '5',
            'title' => '5適当なたいとる入力',
            'user_id' => '4',
            'detail' => '5kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '5500',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
        $param = [
            'id' => '6',
            'title' => '6適当なたいとる入力',
            'user_id' => '4',
            'detail' => '6kokonihaこの動画の詳細なことについて自由に作者が記載をするところですよー。',
            'category_1' => '1',
            'category_2' => '2',
            'price' => '60000',
            'course_id' => '1',
            'preview_id' => '1',
            'preview_flg' => '1',
            'delete_flg' => '0',
        ];
        DB::table('items')->insert($param);
    }
}
