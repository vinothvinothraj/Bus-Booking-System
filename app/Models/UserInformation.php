<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'user_information'; 

    protected $fillable = [
        'user_id',         
        'first_name',      
        'last_name',       
        'nic_id',          
        'gender',    
        'user_type',     
        'loyalty_points',   
        'loyalty_tier',    
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
