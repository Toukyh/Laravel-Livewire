<?php

namespace App\Models;

use App\Models\User;
use App\Models\Proposal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description', 'price'];

    protected static function booted()
    {
        static::creating(function ($Job) {
            $Job->user_id = auth()->id();
        });
    }

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function isLiked()
    {
        if (!auth()->check()) {
            return false;
        }
        return auth()->user()->likes->contains('id', $this->id);
    }
}
