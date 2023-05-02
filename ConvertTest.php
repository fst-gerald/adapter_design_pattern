<?php 

require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ConvertTest extends TestCase
{
    public function testDataProcess() : void
    {
        $oldSystem = new \App\Raw();
        $adapter   = new \App\ProcessedAdapter($oldSystem);
        // check array to string conversion
        $this->assertEquals('string', gettype($adapter->processedData()));
    }
}