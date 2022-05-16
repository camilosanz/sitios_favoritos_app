<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorito
 *
 * @property $id
 * @property $url
 * @property $titulo
 * @property $descripcion
 * @property $categoria_id
 * @property $user_id
 * @property $visibilidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Favorito extends Model
{
    
    static $rules = [
		'url' => 'required',
		'titulo' => 'required',
		'descripcion' => 'required',
		'categoria_id' => 'required',
		'user_id' => 'required',
		'visibilidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url','titulo','descripcion','categoria_id','user_id','visibilidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
