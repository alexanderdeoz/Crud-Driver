<?php

namespace App\Models;
use App\Models\Driver;
use App\Models\Travel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $table = 'app.vehicules';
	protected $fillable = [
        'id',
		'color',
        'model',
        'plate_car',
        'type',
        'driver_id',
        
	];
    
    public function drivers()
	{
		return $this->belongsTo(Driver::class);
	}
    public function travels()
	{
		return $this->hasMany(Travel::class);
	}
    function getCodeAttribute(){ 
    return $this->attributes['id'] . strtolower($this->attributes['code']);
}
}
