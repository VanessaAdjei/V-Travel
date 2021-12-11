<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Tests extends TestCase
{
    public function testFailure(): void
    {
        $this->assertTests('php');
        
    }
}