<?php

namespace App\Models;

use App\Models\Concerns\HasCards;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	use HasCards;

	protected $fillable = [
		'page_number',
		'filepath',
		'content',
		'issue_id'
	];

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime'
	];

	public function issue()
	{
		return $this->belongsTo(Issue::class);
	}
}
