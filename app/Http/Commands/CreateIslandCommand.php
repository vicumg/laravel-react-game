<?php

namespace App\Http\Commands;

use App\Models\Island;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use App\Http\Enums\ErrorStrings;
class CreateIslandCommand
{
    public function handle(Registered $event)
    {
        try {
            $this->createIsland($event->user);
        }catch (\Exception $e){
            Log::error(ErrorStrings::ERROR_CREATE_ISLAND->value, [$event, $e->getMessage()]);
        }

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
