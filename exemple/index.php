<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
$apple = new Fruit();
var_dump($apple instanceof Fruit);

class Vegetable {
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->color = $color;
        $this->name = $name;
    }
}
?>