<?php

namespace App;

class Raw implements RawInterface
{
    const RAW_DATA = [
        'title' => 'This is just a sample title.'
    ];

    public function getData(): array
    {
        return self::RAW_DATA;
    }
}