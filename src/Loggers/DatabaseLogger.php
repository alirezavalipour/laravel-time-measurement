<?php

namespace Lantency\Loggers;

use Lantency\Models\Latency;
use Lantency\Contracts\LogOperation;

class DatabaseLogger implements LogOperation
{

    public function log($source, $description, $executionTime, $timestamp = null)
    {
        Latency::create(['source' => $source, "description" => $description, "time" => $executionTime]);
    }
}
