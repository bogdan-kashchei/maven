<?php

namespace App;

class User
{
    private $name;
    private $age;
    private $role;

    public function __construct(string $name, int$age, string $role = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->role = $role;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public static function createEliteUser(string $role)
    {
        return new self('Elite', '999', $role);
    }

    public function showUserType(){
        return 'Default user type.';
    }
}