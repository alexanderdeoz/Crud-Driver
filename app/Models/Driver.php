<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    use HasFactory;
	use SoftDeletes;
    protected $table = 'app.drivers';
	protected $fillable = [
		'birthday',
        'email',
        'joined_date',
        'name',
        'phone'


	];
	protected $hidden = [
        
    ];

	public function travels()
	{
		return $this->hasMany(Travel::class);
	}
	
	
}

