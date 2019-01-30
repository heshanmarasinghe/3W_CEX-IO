<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_details extends Model
{
    //
    protected $table = 'thistory_table';
    protected $fillable = ['type','date','amount','price','tid'];
}
