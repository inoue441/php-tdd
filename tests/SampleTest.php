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

    public function test文字Lを渡したとき、文字列Noを返す()
    {
        $sample = new \Sample();
        $result = $sample->solve('L');
        $this->assertSame('No', $result);
    }

    public function test文字列UULを渡したとき、文字列Noを返す()
    {
        $sample = new \Sample();
        $result = $sample->solve('UUL');
        $this->assertSame('No', $result);
    }

    public function test文字列URUを渡したとき、文字列Noを返す()
    {
        $sample = new \Sample();
        $result = $sample->solve('URU');
        $this->assertSame('No', $result);
    }
}