<?php

namespace Lantency\Contracts;

interface LogOperation
{
    public function log($source, $description, $executionTime, $timestamp = null);
}
