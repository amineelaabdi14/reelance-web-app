<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'comment'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
