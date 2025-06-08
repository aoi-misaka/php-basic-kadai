<?php

// Foodクラス定義
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "Price: {$this->price} yen\n";
    }
}

// Animalクラス定義
class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "Height: {$this->height} cm\n";
    }
}

// インスタンスの作成
$banana = new Food("Banana", 120);
$cat = new Animal("Cat", 25, 4);

// インスタンス情報を出力
print_r($banana);
print_r($cat);

// メソッドの実行
$banana->show_price();
$cat->show_height();
