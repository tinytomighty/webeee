<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * Get all of the children for the MenuItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    protected $with = [
        'children'
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
