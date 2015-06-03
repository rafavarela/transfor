<?php


use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categorias')->insert(array('nombre' => 'Alambres'));
        DB::table('categorias')->insert(array('nombre' => 'Tubería'));
        DB::table('categorias')->insert(array('nombre' => 'Elementos de fijación'));
        DB::table('categorias')->insert(array('nombre' => 'Perfilería'));
        DB::table('categorias')->insert(array('nombre' => 'Varillas'));
        DB::table('categorias')->insert(array('nombre' => 'Mallas'));
        DB::table('categorias')->insert(array('nombre' => 'Láminas'));
        DB::table('categorias')->insert(array('nombre' => 'Cubiertas'));
        DB::table('categorias')->insert(array('nombre' => 'Alambrón'));
        DB::table('categorias')->insert(array('nombre' => 'Otros'));
    }

} 