<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// allow any user authenticated make event
Broadcast::channel('loppy', function (User $user) {
    return true;
});
