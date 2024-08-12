<?php

namespace App\Policies;

use App\Models\Todo;
use App\Models\User;

class TodoPolicy
{
    public function edit(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id;
    }

    public function update(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id;
    }

    public function destroy(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id;
    }
}
