<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model {

    protected $table = 'typebooks';
    protected $fillable = ['name'];
    
    public function books() {
        return $this->hasMany(Books::class); // กำหนดความสัมพันธ์แบบ One to Many ไปตาราง books
    }

}
