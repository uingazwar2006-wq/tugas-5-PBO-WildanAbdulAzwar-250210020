<?php

// PARENT
class Clothes {
    public $brand;
    protected $color;
    private $price;

    function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function tampilkan() {
        echo "Brand: $this->brand <br>";
        echo "Warna: $this->color <br>";
        echo "Harga: Rp" . $this->price . "<br><br>";
    }
}

// CHILD
class Jacket extends Clothes {}
class TShirt extends Clothes {}
class Pants extends Clothes {}

// OBJECT
$jacket = new Jacket("LVP", "Hitam", 350000);
$tshirt = new TShirt("Puma", "Putih", 150000);
$pants = new Pants("Compas", "Biru", 250000);

// OUTPUT
echo "JACKET<br>";
$jacket->tampilkan();

echo "T-SHIRT<br>";
$tshirt->tampilkan();

echo "PANTS<br>";
$pants->tampilkan();

?>