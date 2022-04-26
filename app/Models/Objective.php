<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Objective extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'type',
        'status',
        'period'
    ];

    protected $casts = [
        'id' => 'string'
    ];

    public function save(array $options = [])
    {
        if (!$this->id) {
            $this->id = Uuid::uuid4()->toString();
        }

        return parent::save($options);
    }
}
