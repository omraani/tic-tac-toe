<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Game;

class GamePolicy
{
    /**
     * Create a new policy for joining the game.
     */
    public function join(User $user, Game $game): bool
    {
        return $game->player_one_id !== $user->id && $game->player_two_id === null;
    }
}
