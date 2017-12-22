<?php
namespace newsletter\newslettersystem;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class table_newsletter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('newsletters')->insert([
			'name'=>  'Manolita',
			'email' => 'emailmanoli@email.com',
			'lang' => 'en',

        ]);  





    }
}
