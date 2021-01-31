<?php
use PHPUnit\Framework\TestCase;
use app\Bhut;

final class BhutTest extends TestCase 
{
    /**
     * @test
     */
    public function test_1(): void
    {
        $b = new \Bhut;
        $value = $b->validation(1);
        $this->assertSame(1, $value);
    }
    
    /**
     * @test
     */
    public function test_3(): void
    {
        $b = new \Bhut;
        $value = $b->validation(3);
        $this->assertSame("BHUT", $value);
    }
    
    /**
     * @test
     */
    public function test_5(): void
    {
        $b = new \Bhut;
        $value = $b->validation(5);
        $this->assertSame("IT", $value);
    }
    
    /**
     * @test
     */
    public function test_15(): void
    {
        $b = new \Bhut;
        $value = $b->validation(15);
        $this->assertSame("BHUT TI", $value);
    }
    
    /**
     * @test
     */
    public function test_100(): void
    {
        $b = new \Bhut;
        $value = $b->run();
        $this->assertEquals(100, count($value));
    }
    
    /**
     * @test
     */
    public function test_options(): void
    {
        $b = new \Bhut;
        $value = $b->run();
        $this->assertFalse(array_key_exists(-1, $value));
        $this->assertTrue(array_key_exists(0, $value));
        $this->assertTrue(array_key_exists(50, $value));
        $this->assertTrue(array_key_exists(99, $value));
        $this->assertFalse(array_key_exists(100, $value));
    }
}