<?php


namespace App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    protected $table = "services";

    protected $fillable = array('*');

    public function lists()
    {
        return $this->hasMany(Desklist::class);
    }


}
