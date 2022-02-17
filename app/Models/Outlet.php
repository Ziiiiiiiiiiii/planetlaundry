<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaction(){
        return $this->hasMany(Transaction::class, 'outlet_id');
    }

    public function user(){
        return $this->hasMany(User::class, 'outlet_id');
    }
}