<?php

namespace App\Observers;

use App\Models\Student;
use App\Models\User;
use App\Notifications\NewApplicationNotification;

class StudentObserver
{
    public function created(Student $student)
    {
        User::all()->each(function ($user) use ($student) {
            $user->notify(new NewApplicationNotification($student));
        });
    }
}
