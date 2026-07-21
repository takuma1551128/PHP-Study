<?php

class User
{
    // フィールド
    private int $id;
    private string $name;
    private int $age;

   
    private string $address;


    public function __construct(int $id, string $name, int $age, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            echo "不正な年齢です\n";
            return;
        }

        $this->age = $age;
    }


    public function getAge(): int
    {
        return $this->age;
    }


    public function setAddress(string $address): void
    {
        if ($address === "") {
            echo "住所を空にはできません\n";
            return;
        }

        $this->address = $address;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

   public function getOlder(): void
{
    $this->setAge($this->age + 1);
}
}