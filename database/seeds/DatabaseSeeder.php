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
        $this->call(ProdutoTableSeeder::class);
    }

}
class ProdutoTableSeeder extends Seeder {
    public function run()
    {
        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
                    values (?,?,?,?)',
                    array('Geladeira',2,590,'Side by side na porta'));

        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
                    values (?,?,?,?)',
            array('Fogão',5,900,'Fogão Dako'));

        DB::insert('insert into produtos(nome, quantidade, valor, descricao)
                    values (?,?,?,?)',
            array('Microndas',1,590,'Manda sinais de radio'));

    }
}
