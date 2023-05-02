<?php

namespace App;

class ProcessedAdapter implements ProcessedInterface
{
    private $raw;

    public function __construct(RawInterface $raw)
    {
        $this->raw = $raw;
    }

    public function processedData(): string
    {
        $rawData = $this->raw->getData();
        
        return json_encode($rawData);
    }
}