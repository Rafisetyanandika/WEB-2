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

public function update($index, $animal) {
    $this->animals[$index] = $animal;
}

public function destroy($index) {
    unset($this->animals[$index]);
}
}

$animal = new animal (["ayam", "ikan"]);
echo "index - menampilkan seluruh hewan <br/>";
$animal->index();
echo"<br/>";

#method store
echo "store - menampilkan seluruh hewan baru (burung) <br/>";
$animal->store("burung");
$animal->index();
echo"<br/>";

#method update
echo "update - mengupdate hewan <br/>";
$animal->update(0, "kucing anggora");
$animal->index();
echo"<br/>";

#method destory
echo "destroy - menghapus hewan <br/>";
$animal->destroy(1);
$animal->index();
echo"<br/>";
