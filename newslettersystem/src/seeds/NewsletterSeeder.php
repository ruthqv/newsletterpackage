<?php
namespace newsletter\newslettersystem;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{

    public function run()
    {
        $this->call(table_newsletter::class);


    }
}