<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pr1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pr1s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
