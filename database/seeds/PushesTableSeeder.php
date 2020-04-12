<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PushesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //pushesテーブルに入力
        $param = [
            'id' => '1',
            'status' => '0',
            'user_id' => '4',
            'comment' => '12312341234',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '2',
            'status' => '0',
            'user_id' => '2',
            'comment' => 'アーはん',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '3',
            'status' => '0',
            'user_id' => '4',
            'comment' => 'あいう',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '4',
            'status' => '1',
            'user_id' => '4',
            'comment' => '動画が購入されました。評価しましょう。',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '5',
            'status' => '2',
            'user_id' => '4',
            'comment' => 'コメントされました。返信しましょう。',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '6',
            'status' => '3',
            'user_id' => '4',
            'comment' => '決済関係',
        ];
        DB::table('pushes')->insert($param);
        $param = [
            'id' => '11',
            'status' => '0',
            'user_id' => '4',
            'comment' => '12312341234',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '12',
            'status' => '0',
            'user_id' => '2',
            'comment' => 'アーはん',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '13',
            'status' => '0',
            'user_id' => '4',
            'comment' => 'あいう',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '14',
            'status' => '1',
            'user_id' => '4',
            'comment' => '動画が購入されました。評価しましょう。',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '15',
            'status' => '2',
            'user_id' => '4',
            'comment' => 'コメントされました。返信しましょう。',
        ];
        DB::table('pushes')->insert($param);

        $param = [
            'id' => '16',
            'status' => '3',
            'user_id' => '4',
            'comment' => '決済関係',
        ];
        DB::table('pushes')->insert($param);

    }
}
