<?php
namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\Teacher;
use App\classes\Category;

class Student extends Teacher implements ExampleOne, ExampleTwo
{
    use Category;

    protected $country = 'Bangladesh';
    public static $area = 'Farmgate';

    public function __construct()
    {
        $this->name= 'riaz';
        $this->city = 'savar';
    }

    public function manage(){
        echo self::$area;
//        echo "Institute name is $this->name and city is $this->city and country is $this->country ";
    }

    public function one()
    {
        echo "hello one";
    }

    public function two()
    {
        echo "hello two";
    }

    public function three()
    {
        echo "hello three";
    }

    public function ten()
    {
        echo "hello ten1";
    }

    public function ten1()
    {
        echo "hello ten2";
    }

    public function ten2()
    {
        echo "hello ten2";
    }

    public function test()
    {
        echo "hello test";
    }
    public static function demo(){
        echo 'hello demo';
    }
}