<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO users (name,email,password) VALUES(?,?,?)',array('alexandre rosa','alexandreifpr@hotmail.com',bcrypt('testando')));
    }
}
