<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function setNameAttribute($value)
    {
        $this->attributes['user_name'] = ucwords($value);
    }

    public function setDobAttribute($value)
    {
        return date("d-M-Y", strtotime($value));
    }
}
