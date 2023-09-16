<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users=User::all();
        $events=Event::all();
        foreach ($events as $event){
        $usersToAttend=$users->random(rand(1,200));
            foreach($usersToAttend as $user){
            \App\Models\Attendee::create([
               'user_id' =>$user->id,
               'event_id'=>$event->id
            ]);
        }
        }

    }
}
