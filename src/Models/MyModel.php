<?php

namespace AmirVahedix\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
