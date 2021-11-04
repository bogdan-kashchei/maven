<?php
declare(strict_types=1);

namespace App;

/**
 *
 */
class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $age;

    /**
     * @var string|null
     */
    public $role;

    /**
     * @param string $name
     * @param int $age
     * @param string|null $role
     */
    public function __construct(string $name, int $age, string $role = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|string|bool
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @param string $role
     * @return User
     */
    public static function createEliteUser(string $role)
    {
        return new self('Elite', 999, $role);
    }

    /**
     * @return string
     */
    public function showUserType()
    {
        return 'Default user type.';
    }
}