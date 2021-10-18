<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

	protected $fillable = ['slug', 'description', 'google_maps_link'];

	//Eloquent relations

	public function profile()
	{
		return $this->hasOne(\App\Models\ResourceProfile::class);
	}

	// Scopes

	public function scopeSlugged(Builder $query, $slug): Builder
	{
		return $query->where('slug', $slug);
	}

	//Eloquent relations

	public function journals(): \Illuminate\Database\Eloquent\Relations\HasMany
	{
		return $this->hasMany(\App\Models\Journal::class);
	}

	public function cards(): \Illuminate\Database\Eloquent\Relations\HasMany
	{
		return $this->hasMany(\App\Models\Card::class);
	}

	public function news(): \Illuminate\Database\Eloquent\Relations\HasMany
	{
		return $this->hasMany(\App\Models\News::class);
	}

    public function users(){
        return $this->belongsToMany(User::class, 'organization_users', 'id_organization', 'id_user');
    }

}
