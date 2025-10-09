<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // 👇 use your table name here
    protected $table = 'my_admin';

    // 👇 which columns can be mass assigned
    protected $fillable = ['name', 'email', 'password'];

    // 👇 if your table does not have timestamps (created_at, updated_at)
    public $timestamps = false;
}
