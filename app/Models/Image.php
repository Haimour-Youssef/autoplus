<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, softDeletes;
    
    protected $fillable = ['path','module'];

    public function imageable() {
        return $this->morphTo();
    }

    public function url($thumbail = "") {
        return Storage::url($this->module.'/'.$thumbail.$this->path);
        //return $this->path;
    }
}
