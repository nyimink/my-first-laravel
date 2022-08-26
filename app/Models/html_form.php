<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class html_form extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName','email', 'password'];
}
