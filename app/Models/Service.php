<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Category;
use App\Models\Service;
use App\Models\Collaborator;

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
    
    public function collaborator(): BelongsTo
    {
        return $this->belongsTo(Collaborator::class, 'collab_id', 'collab_id');
    }
}
