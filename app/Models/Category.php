<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Illuminate\Database\Relations\BelongsTo;
use Illuminate\Database\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    
    /**
     * table
     *
     * @var string
     */
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable =[
        'name',
        'description',
        'image'
    ];

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

}
