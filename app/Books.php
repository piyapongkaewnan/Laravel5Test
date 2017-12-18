<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model {

    protected $table = 'books';
    protected $fillable = ['title', 'price', 'typebooks_id'];

    public function typebooks() {
        return $this->belongsTo(TypeBooks::class, 'typebooks_id'); // กำหนด FK 
    }

}
