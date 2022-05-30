<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiKey
 * @package App\Models
 */
class ApiKey extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $fillable = [
        'expires_at'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'key'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'expires_at' => 'timestamp',
    ];
}
