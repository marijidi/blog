<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

     /**
     * table
     *
     * @var string
     */
    protected $table = 'collaborators';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable =[
        'name',
        'lastname',
        'phone',
        'email',
        'image'
    ];

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
   /* public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }*/

}
