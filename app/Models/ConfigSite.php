<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigSite extends Model
{
    protected $table = 'config_sites';
    protected $fillable = [
        'logo', 
        'favicon', 
        'title', 
        'description', 
        'keywords', 
        'author', 
        'copyright', 
        'default_language', 
        'default_currency'
    ];
}
