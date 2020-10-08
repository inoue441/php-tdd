<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    protected Sample $sample;

    protected function setUp(): void
    {
        $this->sample = new \Sample();
    }

    public function test文字Rを渡したとき、文字列Yesを返す()
    {
        $this->assertSame('Yes', $this->sample->solve('R'));
    }

    public function test文字Lを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('L'));
    }

    public function test文字列UULを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('UUL'));
    }

    public function test文字列URUを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('URU'));
    }
}