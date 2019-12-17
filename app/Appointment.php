<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = "appointment";

    protected $primaryKey = "appid";
    public $timestamps = false;
}
