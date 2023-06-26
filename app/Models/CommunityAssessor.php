<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityAssessor extends Model
{
    // Table Name
    protected $table = 'assessor';

    //Make id string return
    protected $casts = ['id' => 'string'];

    //Select database
    protected $connection = 'mysql4';

    //true to auto add timestamps
    public $timestamps = false;
}