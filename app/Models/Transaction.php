<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function outlet(){
        return $this->belongsTo(Outlet::class, 'outlet_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    
    public function package(){
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}