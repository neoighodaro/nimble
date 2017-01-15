<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    /**
     * Name of the table.
     *
     * @var string
     */
    protected $table = 'users';
}