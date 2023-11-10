<?php
class Person
{
    // magic method in oop php
    // cac phuong thuc nay la co san, chi can goi ra su dung
    public $name = "Teo";

    public function __construct($age = 20)
    {
        // ham khoi tao
        // tat ca cac magic method cua php deu co dau hieu nhan biet: co 2 dau gach duoi lien nhau dung truoc ten phuong thuc
        // phuong thuc construct se tu dong chay(chay dau tien nhat) khi khoi tao doi tuong cho class
        echo __FUNCTION__ . " running - my age : {$age}"; // magic constant - giup lay ra ten phuong thuc dang chay
        echo "<br/>";
    }

    public function __destruct()
    {
        echo "<br/>";
        echo __FUNCTION__ . " is running";
        // ham huy
        // phuong thuc se tu dong chay khi co doi tuong dc khoi tao, tu dong chay cuoi cung
    }

    public function getName()
    {
        return $this->name;
    }

    public function __call($method, $args)
    {
        // ham nay se tu dong chay khi mot doi tuong truy cap mot phuong thuc khong phai la static va khong ton tai trong class
        // $method : ten phuong thuc ko tai trong class
        // $args: mot mang chua toan bo cac tham so cua phuong thuc khong ton tai trong class
        echo "Ban da truy cap vao phuong khong ton tai trong class vo ten la {$method}";
        echo "<pre>";
        print_r($args);
    }

    public static function __callStatic($method, $args)
    {
        echo "Ban da truy cap vao phuong <b>static khong ton tai trong class</b> voi ten la {$method}";
        echo "<pre>";
        print_r($args);
    }

    public function __get($name)
    {
        // method nay se tu dong chay neu mot doi tuong truy cap vao 1 thuoc tinh khong ton tai trong class
        echo "Ban vua truy cap vao thuoc <b>{$name}</b> khong ton tai trong class " . __CLASS__;
    }

    public function __set($name, $value)
    {
        echo "Ban vua truy cap vao thuoc <b>{$name}</b> khong ton tai trong class " . __CLASS__ . " voi gia tri gan la {$value}";
    }
}
$worker = new Person(30); // lap tuc __construct se tu dong chay
//echo $worker->getName();
$worker->getAge(10,20,30); // khi goi vao 1 method ko ton tai trong class thi tu dong magic method __call() se chay
Person::getEmail('teo@gmail.com');
echo "<br/>";
$worker->address;
echo "<br/>";
$worker->salary = 1000;