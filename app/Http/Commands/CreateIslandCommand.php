<?php

namespace App\Http\Commands;

use App\Models\Island;
use Illuminate\Auth\Events\Registered;

class CreateIslandCommand
{
    public function handle(Registered $event)
    {
        $stop = "";
        echo __CLASS__;

        $user = "user";

        $this->createIsland($user);

    }

    private function createIsland(string $user)
    {
        $coord_x = rand(1,100);
        $coord_y = rand(1,100);

        $island = Island::where('point_x', $coord_x)->where('point_y', $coord_y);
        //TODO:continue
    }
}
