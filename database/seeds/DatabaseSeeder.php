<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::insert('INSERT INTO users (name,email,password) VALUES(?,?,?)',array('alexandre rosa','alexandreifpr@hotmail.com',bcrypt('testando')));
        DB::insert('INSERT INTO partidas (time1,time2,informacao,data,hora,local) values (?,?,?,?,?,?)',array('1','2','Grande Partida de Futebol nesse final de semana','15/06','16:00','Paranaguá'));

    }
}
