<?php

namespace Lantency\Models;

use Illuminate\Database\Eloquent\Model;

class Latency extends Model
{

    protected $fillable = [
        "source",
        "description",
        "time",
    ];

}
