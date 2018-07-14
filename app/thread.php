<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    protected $table = 'thread';
	protected $primaryKey = 'thread_id';
	public $timestamps = true;
}
