<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRequirements extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'CustomerName',
        'CustomerEmail',
        'CustomerPhone',
        'OrgName',
        'CartItems',
        'ISP',
        'Comments' ,   
        
    ];
}
