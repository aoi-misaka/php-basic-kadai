<?php

// Foodクラスの定義
class Food {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo "The price of {$this->name} is {$this->price} yen.<br>";
    }
}

// Animalクラスの定義
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
        echo "The height of {$this->name} is {$this->height} cm.<br>";
    }
}

// インスタンス作成
$banana = new Food("Banana", 120);
$cat = new Animal("Cat", 25, 4.5);

// インスタンスの内容を表示
echo "<pre>"; // 見やすく整形
print_r($banana);
print_r($cat);
echo "</pre>";
?>
