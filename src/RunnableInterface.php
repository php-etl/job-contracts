<?php

declare(strict_types=1);

namespace Kiboko\Contract\Job;

interface RunnableInterface
{
    public function run(int $interval = 1000): int;
}
