<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = 'member';
	protected $primaryKey = 'MEMBER_ID';
	public $timestamps = true;
}
