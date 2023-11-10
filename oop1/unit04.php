<?php
declare(strict_types=1); // kiem soat loi php 7 tro len

class Demo
{
    public string $name = "Teo";
    public int $age = 20;
    
    public function getName() : string
    {
        // method nay bat buoc phai return ve 1 chuoi
        return $this->name;
    }

    public function getEmail(string $email) : void
    {
        // method nay khong bat buoc tra du lieu ve (lien quan den tu khoa return)
        echo $email;
    }
}
$test = new Demo();
$test->getEmail("1000");