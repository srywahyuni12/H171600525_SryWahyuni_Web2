<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
     protected $table='galeri';

       protected $fillable=['nama','user_id','kategori_galeri_id'
    ];
}

