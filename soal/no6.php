<?php
class Rectangle {
    public $length = 0;
    public $width = 0;
  
    public function __construct(int $length, int $width) {
      $this->length = $length;
      $this->width = $width;
    }
  
    public function __toString() {
      return sprintf(
        'Rectangle (%d x %d)',
        $this->length,
        $this->width
      );
    }
  
    public function calculateArea(): float {
      return $this->length * $this->width;
    }
  }
  
  $rectangle1 = new Rectangle(5, 8);
  
  echo $rectangle1->calculateArea();
    ?>