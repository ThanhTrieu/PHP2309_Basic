<?php 
// dinh nghia class
class Student 
{
    // thuoc tinh cua doi tuong (property)
    // chinh mo ta cac dac diem tinh chat, trang thai cua doi tuong - thong thuong se dung cac danh tu hay tinh tu de dien dat
    public $id = "0010233";
    public $name = "Teo";
    private $score = 1;
    protected $document = "PHP";

    // hanh dong - hanh vi cua doi tuong (thong thuong dung cac dong tu de mieu ta) - goi la cac phuong thuc (method) (chinh la cac ham)
    public function goToSchool()
    {
        return "ABC";
    }
    public function Test()
    {
        return "PHP OOP";
    }

    public function getDocument()
    {
        var_dump($this);
        return $this->document;
    }
}
// tao ra 1 doi tuong thuoc class
$svcntt = new Student();
$svck = new Student();
// truy cap vao thuoc tinh hay phuong thuc cua doi tuong trong class
$idStudent = $svcntt->id;
$testName = $svck->Test(); // () chay phuong thuc
//echo "{$idStudent} --- {$testName}";
//$myScore = $svcntt->score; // sai vi thuoc tinh score la private
//echo $myScore;
//$myDoc = $svck->document; // sai vi thuoc tinh document la protected
//echo $myDoc;
$doc = $svck->getDocument();
echo $doc;