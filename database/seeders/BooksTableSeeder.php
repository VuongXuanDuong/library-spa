<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Tôi thấy hoa vàng trên cỏ xanh',
            'author' => 'Nguyễn Nhật Ánh'
        ]);
        DB::table('books')->insert([
            'name' => 'Mắt biếc',
            'author' => 'Nguyễn Nhật Ánh'
        ]);
        DB::table('books')->insert([
            'name' => 'Truyện Kiều',
            'author' => 'Nguyễn Du'
        ]);
    }
}
