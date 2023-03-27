<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

        /**
     * table
     *
     * @var string
     */
    protected $table = 'services';
    
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
        return $this->hasOne(Category::class, 'category_id', 'id');
    }
    
}
