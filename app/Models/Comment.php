<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function post()
	{
		return $this->belongsTo(Post::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class, 'commenter_name');
	}

	protected $fillable = [
		'post_id',
		'commenter_name',
		'content'
	];
}
