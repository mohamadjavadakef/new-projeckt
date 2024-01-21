<?php

namespace App\Models\Content;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use HasFactory , SoftDeletes , Sluggable;

    public function Sluggable() : array {

        return[
            'sluq' =>[
                'source' => 'name'
            ]

        ];
    }

    protected $fillable=['name','description','sluq','image','status','tags'];
}
