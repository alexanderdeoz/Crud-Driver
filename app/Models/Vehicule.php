<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table = 'app.vehicules';
	protected $fillable = [
        'code',
		'color',
        'model',
        'plate_car',
        'type',
        
	];
    public function drivers()
	{
		return $this->belongsTo(Driver::class);
	}
}
