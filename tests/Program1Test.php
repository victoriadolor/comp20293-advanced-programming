<?php 
require_once __DIR__ . '/../src/Program1.php';

class Program1Test extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $program1 = new Program1 (17);
        $result = $program1->modulus(5);

        $this->assertEquals(2, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $program1 = new Program1 (3);
        $result = $program1->modulus(16);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $program1 = new Program1 (4);
        $result = $program1->modulus('V');
    }

    public function testModulus1()
    {
        $program1 = new Program1 (14);
        $result = $program1->modulus(9);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $program1 = new Program1 (14);
        $result = $program1->modulus(12);

        $this->assertEquals(2, $result);
    }
}