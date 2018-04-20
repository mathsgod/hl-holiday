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



}