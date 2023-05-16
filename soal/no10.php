
<?php
class Animal {
    public $name;
    public $sound;
    
    public function makeSound() {
        echo "Hewan " . $this->name . " suaranya: " . $this->sound;
    }
}

$animal1 = new Animal();
$animal1->name = "Cat";
$animal1->sound = "Meow";

$animal1->makeSound();