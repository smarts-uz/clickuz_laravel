<?php

namespace Teamprodev\Clickuz_Laravel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClickTransaction extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','amount','status'];
}
