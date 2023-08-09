<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Disable default timestamp fields
     * @var boolean $timestamps
     */
    public $timestamps = false;

    /**
     * The database table used by the model.
     * @var string $table.
     */
    protected $table = 'roles';

    /**
     * Define which attributes are mass assignable (for security)
     * Fillable array includes all keys that are fillable.
     * @var array $fillable
     */
    protected $fillable = [
        'name'
    ];
}