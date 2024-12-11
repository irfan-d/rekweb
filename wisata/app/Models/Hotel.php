<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Hotel extends Model
{
 protected $table = 'hotel';
 protected $primaryKey = 'id_hotel';
 public $timestamps = false;
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'names', 'address','price'
 ];
 /**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
 protected $hidden = [];
}
