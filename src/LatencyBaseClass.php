<?php

namespace Lantency;

use Lantency\Models\Latency;
use Lantency\Contracts\LogOperation;
use Carbon\Carbon;

class LatencyBaseClass
{
    protected $startTime;
    protected $finishTime;
    protected $executionTime;
    protected $logger;

    public function __construct(LogOperation $logger)
    {
        $this->logger = $logger;
    }

    public function start()
    {
        $this->startTime = microtime(true);

        return $this;
    }

    public function finish()
    {
        $this->finishTime    = microtime(true);
        $this->executionTime = $this->finishTime - $this->startTime;

        return $this;
    }

    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    public function save($source, $description)
    {
        $this->logger->log($source, $description, $this->executionTime, Carbon::now());
    }

}
