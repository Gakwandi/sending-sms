<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sms extends Model
{
    //
    protected $table='sms';
    protected $fillable = ['full_names', 'phone_number', 'content'];
}
