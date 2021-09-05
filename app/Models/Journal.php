<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
	use HasFactory;

	protected $fillable = [
		'localization',
		'title',
		'format_type',
		'printing',
		'idiom',
		'creation_date',
		'end_date'
	];

	protected $casts = [
		'creation_date' => 'datetime',
		'end_date' => 'datetime',
		'created_at' => 'datetime',
		'updated_at' => 'datetime'
	];
}
