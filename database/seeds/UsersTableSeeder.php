<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usersテーブルに仮にデータ入力
        $param = [
            'name' => 'taro',
            'email' => '11@11.11',
            'password' => 'asdf0000',
            'nickname' => 'tarochan',
            'tel' => '12312341234',
            'detail' => 'よろしくしてね。私が彼方との恋ってなんだろうねー。そしてこれから私たには一体どうなるのか。それは誰にもわかりませーん。',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'satou',
            'email' => '22@11.11',
            'password' => 'asdf0000',
            'nickname' => 'sattton',
            'tel' => '12312341234',
            'detail' => 'よろしくしてちゃん。チャンチャンちゃん太郎。チャン太郎はとってもこう、行為いったどういったんだろう。',
        ];

        DB::table('users')->insert($param);
        $param = [
            'name' => 'baachan',
            'email' => '13@11.11',
            'password' => 'asdf0000',
            'nickname' => 'baachan',
            'tel' => '12312341234',
            'detail' => '老いぼれをよろしくしてね。老いぼれレボリューションーーー・クラえーーこの俺の悲報のひっっとオンパレード。',
        ];
        DB::table('users')->insert($param);
        

    }
}
