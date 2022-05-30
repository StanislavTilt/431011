<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class CategoryItem
 * @package App\Models
 */
class CategoryItem extends Pivot
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'category_item';

    /**
     * @var array
     */
    protected $fillable = [
        'item_id',
        'category_id',
    ];
}
