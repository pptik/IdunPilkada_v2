<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    protected $table = 'glossaries';
    //
    protected $fillable = [
        'id_narasumber', 'isi'
    ];
}
