<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users= User::all();
        $venues=Venue::all();
        for ($i=0; $i<50;$i++){
           $user=$users->random();
           $venue=$venues->random();
           \App\Models\Event::factory()->create(
            [
                'user_id'=>$user->id,
                'venue_id'=>$venue->id,   
            ]
           );
            

        }

    }
}
