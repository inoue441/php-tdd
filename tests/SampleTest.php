<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function test文字Rを渡したとき、文字列Yesを返す()
    {
        $sample = new \Sample();
        $result = $sample->solve('R');
        $this->assertSame('Yes', $result);
    }
}