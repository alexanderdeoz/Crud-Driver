<?php

namespace App\Models;
use App\Models\Driver;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'app.travels';
	protected $fillable = [
		'id',
        'end_time',
        'start_time',
        '',
        '',

	];
    public function drivers()
	{
		return $this->belongsTo(Driver::class);
	}
    function getCodeAttribute(){ 
        return $this->attributes['id'] . strtolower($this->attributes['code']);}
}
