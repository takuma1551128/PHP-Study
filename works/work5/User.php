<?php

class User
{
    // フィールド
    private int $id;
    private string $name;
    private int $age;
    private string $address;

    // コンストラクタ
    function __construct(int $id, string $name, int $age, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // ID取得
    function getId(): int
    {
        return $this->id;
    }

    // 名前変更
    function setName(string $name): void
    {
        $this->name = $name;
    }

    // 名前取得
    function getName(): string
    {
        return $this->name;
    }

    // 年齢変更（バリデーション付き）
    function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            echo "不正な年齢です\n";
            return;
        }

        $this->age = $age;
    }

    // 年齢取得
    function getAge(): int
    {
        return $this->age;
    }

    // 住所変更（バリデーション付き）
    function setAddress(string $address): void
    {
        if ($address === "") {
            echo "住所を空にはできません\n";
            return;
        }

        $this->address = $address;
    }

    // 住所取得
    function getAddress(): string
    {
        return $this->address;
    }

    // 1歳年を取る
    function getOlder(): void
    {
        $this->setAge($this->age + 1);
    }
}
