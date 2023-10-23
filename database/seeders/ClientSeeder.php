<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Client;
use DB;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index){
        DB::table('clients')->insert([
            'name'=>$faker->name,
            'statut'=>$faker->randomElement(['vip','privilegie','standard']),
            'contact'=>$faker->phoneNumber,
            'contact_whatsapp'=>$faker->phoneNumber,
            'email_adress'=>$faker->unique()->safeEmail,

        ]);
        }
    }
}
