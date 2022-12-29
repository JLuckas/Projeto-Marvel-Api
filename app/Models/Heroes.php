<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'heroes';
    protected $fillable = [
    'id',
    'path',
    'extension',
    'name',
    'description'];

}
