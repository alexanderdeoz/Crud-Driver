<?php
namespace App\Models;

use App\Models\Vehicule;
use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Driver extends Model
{
    use HasFactory;
	use SoftDeletes;
    protected $table = 'app.drivers';
	protected $fillable = [
		'id',
		'birthday',
        'email',
        'joined_date',
        'name',
        'phone'


	];
	public function travels()
	{
		return $this->hasMany(Travel::class);
	}
	public function vehicules()
	{
		return $this->belongsTo(Vehicule::class);
	}
	function getCodeAttribute(){ 
		return $this->attributes['id'] . strtolower($this->attributes['code']);}
	
}

