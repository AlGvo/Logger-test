<?php

namespace Test;

use Psr\Log\LoggerInterface;

class Test
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function sum($a, $b): float
    {
        $this->logger->debug('Values:', [
            'a' => $a,
            'b' => $b,
        ]);

        $result = $a + $b;
        $this->logger->info('Result: '. $result);
        return $result;
    }

    public function divide($a, $b)
    {
        $this->logger->debug('Values:', [
            'a' => $a,
            'b' => $b,
        ]);

        if ($b == 0) {
            $this->logger->warning('Divide by zero!');
            return null;
        }

        $result = $a / $b;
        $this->logger->info('Result: '. $result);
        return $result;
    }

}