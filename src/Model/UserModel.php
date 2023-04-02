<?php
declare(strict_types=1);

namespace App\Model;

class UserModel
{
    /** @var int $id */
    private int $id;

    /** @var string $name */
    private string $name;

    /** @var int $income */
    private int $income;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): UserModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): UserModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncome(): int
    {
        return $this->income;
    }

    /**
     * @param int $income
     * @return $this
     */
    public function setIncome(int $income): UserModel
    {
        $this->income = $income;
        return $this;
    }
}