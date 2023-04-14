<?php

declare(strict_types=1);

namespace Kiboko\Contract\Job;

interface SchedulingInterface
{
    public function job(RunnableInterface $job): self;
}
