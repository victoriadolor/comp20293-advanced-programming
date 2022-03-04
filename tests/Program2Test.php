<?php 
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() 
    {
        $program2 = new Program2();
        $program2->setName('Victoria');
        $this->assertEquals($program2->getName(), 'Victoria');
    }

    public function testGetAge()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertEquals($program2->getAge(), 22);
    }

    public function testFavoriteColor()
    {
        $program2 = new Program2();
        $program2->setFavoriteColor('Violet');
        $this->assertEquals($program2->getFavoriteColor(), 'Violet');
    }

    public function testGetNameCheckString()
    {
        $program2 = new Program2();
        $program2 ->setName('Victoria');
        $this->assertIsString($program2->getName(), 'Victoria');
    }

    public function testGetAgeCheckInt()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertIsInt($program2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertIsNumeric($program2->getAge(), 22);
    }
    
    public function testFavoriteColorCheckString()
    {
        $program2 = new Program2();
        $program2->setFavoriteColor('Violet');
        $this->assertIsString($program2->getFavoriteColor(), 'Violet');
    }

    public function testGetTogetherInput()
    {
        $program2 = new Program2();
        $program2->setTogetherInput('Victoria', 21, 'Violet');
        $this->assertEquals($program2->getTogetherInput(), 'Victoria', 21, 'Violet');
    }

}