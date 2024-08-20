<?php

use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// allow any user authenticated make event
Broadcast::channel('loppy', function (User $user) {
    return true;
});

Broadcast::channel('games.{game}', function (User $user, Game $game) {

    if (! in_array($user->id, [$game->player_one_id, $game->player_two_id])) {
        return false;
    }
    return ['id' => $user->id];
});
