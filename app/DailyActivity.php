<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyActivity extends Model
{
    // Table Name
    protected $table = 'daily_activities';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
};


