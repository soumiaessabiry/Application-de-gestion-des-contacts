<!-- // 
// $dateAjourdhui= new DateTime;
// echo $dateAjourdhui->format('j/m/Y');
//  -->

<!--
 
// $date = new DateTimeImmutable;
// $newDate = $date->modify('+1 day');
 
// echo $date->format('d/m/Y').PHP_EOL;
// echo $newDate->format('d/m/Y'); -->
<!-- php -->
<!-- // class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }
<!-- //  -->
<!-- class car {
    public $mark;
    private $_volumvarburent;
    protected $_estrepart;
}
$car1=new car();
car1->mark --> -->
<?php
class voiure{
    public $mark;
    private $vol;
    protected $repare;

}
$car =new voiure();
$car->mark = 'dacia';
$car->repare='rtr';
echo $car->mark;