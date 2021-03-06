<?php
declare(strict_types=1);

namespace App;

Use App\User;

class SuperUser extends User
{
//    private $superPower;

    public function __construct(string $name, int $age, string $superPower)
    {
        $this->superPower = $superPower;
        var_dump($superPower);
        parent::__construct($name, $age);
    }

    public function getSuperPower(){
        return $this->superPower;
    }

    public function setSuperPower(string $superPower){
            $this->superPower = $superPower;
    }

    public function showUserType(){
        return 'SuperUser type.';
    }
}