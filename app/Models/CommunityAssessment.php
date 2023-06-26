<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityAssessment extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'assessment';

    //Make id string return
    protected $casts = ['id' => 'string'];

    //Select database
    protected $connection = 'mysql4';

    //true to auto add timestamps
    public $timestamps = false;
}
