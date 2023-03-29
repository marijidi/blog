<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Service;

class Collaborator extends Model
{
    use HasFactory;

     /**
     * table
     *
     * @var string
     */
    protected $table = 'collaborators';
    protected $primaryKey = 'collab_id';
    protected $guarded = [];
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
        'image',
        'service_id'
    ];

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function service(): HasMany
     {
         return $this->hasMany(Service::class, 'service_id', 'service_id');
     }

}
