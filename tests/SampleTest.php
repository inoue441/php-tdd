<?php
/** @noinspection NonAsciiCharacters */

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    protected Sample $sample;

    protected function setUp(): void
    {
        $this->sample = new \Sample();
    }

    /**
     * @test
     */
    public function 文字Rを渡したとき、文字列Yesを返す()
    {
        $this->assertSame('Yes', $this->sample->solve('R'));
    }

    /**
     * @test
     */
    public function 文字Lを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('L'));
    }

    /**
     * @test
     */
    public function 文字列UULを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('UUL'));
    }

    /**
     * @test
     */
    public function 文字列URUを渡したとき、文字列Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('URU'));
    }
}