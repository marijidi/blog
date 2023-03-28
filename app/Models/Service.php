<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Category;
use App\Models\Service;

class Service extends Model
{
    use HasFactory;

        /**
     * table
     *
     * @var string
     */
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price'
    ];

    /**
     * Get the user associated with the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }

    public function collaborator(): HasMany
    {
        return $this->hasOne(collaborators::class, 'collab_id', 'collab_id');
    }
    
}
