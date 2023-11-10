<?php
class Animals
{
    public static $name = "Tom - Cat";
    private $food = "fish";
    private static $eyeColor = "blue";
    private const GENDER = "Male";

    public function getGender()
    {
        return self::GENDER;
    }


    public static function getEyeColor()
    {
        return self::$eyeColor;
    }

    public static function eating()
    {
        // vi method nay la static nen khong ton tai doi tuong $this
        //$dog = new Animals();
        //return $dog->food;
        return (new Animals())->food;
    }
}
$cat = new Animals();
//echo $cat->name; // khong dung doi tuong cua class de truy cap vao thuoc tinh duoi dang static
// truy vao thuoc tinh static ben ngoai class, thi dung truc tiep class de truy cap
$nameCat = Animals::$name;
//echo $nameCat;
$food = Animals::eating();
//echo $food;