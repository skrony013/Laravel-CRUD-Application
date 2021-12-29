<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Service extends Model
{
    use HasFactory;
     protected $fillable = [
        'service_title',
        'service_short_desc',
        'service_img',
        'service_cat',
        'service_status',
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }


}
