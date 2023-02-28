<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Faker che mi popola il db con 12 contatti creati in modo random
        for ($i = 0; $i < 12; $i++) {
            $contact = new Contact();
            $contact->name = $faker->firstName();
            $contact->last_name = $faker->lastName();
            $contact->num = $faker->phoneNumber();
            $contact->save();
        }
    }
}
