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
      public $name;
      public $price;

      // メソッド
      public function show_price($price)
      {
        echo $price;
      }

      // コンストラクタ
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }
    // クラスの生成
    class Animal
    {
      // プロパティを定義
      public $name;
      public $height;
      public $weight;

      // メソッド
      public function show_height($height)
      {
        echo $height;
      }

      // コンストラクタ
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インストラクタ化
    $food = new Food('potato', 250);
    print_r($food);

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);

    // メソッドにアクセスして出力
    echo "<br>" . $food->price . "<br>";
    echo $animal->height;
    ?>

  </p>
</body>

</html>