<?php

use App\Models\Collaborator;
use Illuminate\Database\Seeder;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Collaborator::class, 20)->create();
    }
}
