<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contentdetail extends Model
{
    protected $table = 'content_detail';
	protected $primaryKey = 'CONTENT_ID';
	public $timestamps = true;
}

