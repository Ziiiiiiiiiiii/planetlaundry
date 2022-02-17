<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'transaction_id');
    }

    public function packagecategory()
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id');
    }
}