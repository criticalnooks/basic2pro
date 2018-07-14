<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'content';
	protected $primaryKey = 'CONTENT_ID';
	public $timestamps = true;
}

