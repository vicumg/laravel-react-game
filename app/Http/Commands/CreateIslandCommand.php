<?php

namespace App\Http\Commands;

use App\Models\Island;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class CreateIslandCommand
{
    public function handle(Registered $event)
    {
        $stop = "";
        echo __CLASS__;

        $user = $event->user;

        $this->createIsland($user);

    }

    private function createIsland(User $user)
    {

        do {
            $coord_x = rand(1,100);
            $coord_y = rand(1,100);
            $island = Island::where('point_x', $coord_x)->where('point_y', $coord_y)->first();

        } while($island !== NULL);

        Island::factory(1)->create([
            'point_x' => $coord_x,
            'point_y' => $coord_y,
            'user_id' => $user->id,
            'title' => 'Остров игрока' . $user->name,
        ]);
    }
}
