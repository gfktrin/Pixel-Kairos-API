<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Desenvolvimento de games',
            'slug' => 'desenvolvimento-de-games',
            'description' => 'Já sonhou em criar seu proprio jogo? Com esse curso, você vai aprender a criar jogos de diferentes tipos com várias ferramentas, de forma que qualquer um possa tirar seu projeto do papel.',
        ]);
    }
}
