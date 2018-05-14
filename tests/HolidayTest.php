<?
declare (strict_types = 1);
error_reporting(E_ALL && ~E_WARNING);
use PHPUnit\Framework\TestCase;

use HL\Holiday;

final class HolidayTest extends TestCase
{

    public function test_isHoliday()
    {
        $hl=new Holiday();
        $this->assertTrue($hl->isHoliday("2018-01-01"));
        $this->assertFalse($hl->isHoliday("2018-01-05"));

    }

    public function test_getEvents(){
        $hl=new Holiday();
        $this->assertNotNull($hl->getEvents());
    }

    public function test_getHoliday()
    {
        $hl=new Holiday();
        $this->assertNotNull($hl->getHoliday("2019-01-01","2019-12-31"));

    }



}