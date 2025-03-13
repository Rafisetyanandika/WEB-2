<?php

class animal 
{
    public $animals;

    public function __construct($ar_animal)
{
     $this->animals = $ar_animal;
}

public function index()
{
    foreach ($this->animals as $animal){
        echo "- $animal <br/>";
    }
}

public function store($animal) {
    $this->animals[] = $animal;
}

public function update() {}

public function destory() {}
}

$animal = new animal (["ayam", "ikan"]);
echo "index - menampilkan seluruh hewan <br/>";
$animal->index();
echo"<br/>";

echo "store - menampilkan seluruh hewan baru (burung) <br/>";
$animal->store("burung");
$animal->index();
echo"<br/>";