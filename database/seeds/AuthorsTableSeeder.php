<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'firstname' => 'Pieter',
            'lastname' => 'Van Peteghem',
            'email' => 'pieter.vanpeteghem@odisee.be',
            'website' => 'weareantenna.be',
            'location' => 'Lochristi, Belgium',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('authors')->insert([
            'firstname' => 'Joris',
            'lastname' => 'Maervoet',
            'email' => 'joris.maervoet@odisee.be',
            'website' => 'www.linkedin.com/in/jorismaervoet/',
            'location' => 'Kruibeke, Belgium',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('authors')->insert([
            'firstname' => 'Jan',
            'lastname' => 'Janssens',
            'email' => 'jan.janssens@odisee.be',
            'website' => 'null',
            'location' => 'Boom, Belgium',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
