<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスの生成
    class Food
    {
      // プロパティを定義
      private $name;
      private $price;

      // コンストラクタ
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッド
      public function show_price()
      {
        echo $this->price . "<br>";
      }
    }
    // クラスの生成
    class Animal
    {
      // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッド
      public function show_height()
      {
        echo $this->height . "<br>";
      }
    }

    // インスタンス$foodを作成
    $food = new Food('potato', 250);
    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);

    // インスタンス$animalを作成
    $animal = new Animal('dog', 60, 5000);
    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);

    echo "<br>";

    // メソッドにアクセスして実行
    $food->show_price();
    $animal->show_height();
    ?>

  </p>
</body>

</html>