<?php
//батьківский клас
class Parent1{
	//змінні
	private $float, $string;
	//конструктор
	function __construct($float, $string) {
		print( 'Parent constr<br/>');
		$this->float=$float;
		$this->string=$string;
        //приведення типів
        $this->float=2*(int)$this->float;
	}

	public function getResult() {
    //рядки, що об'єднуються конкатенацією
    return 'float that became int' . "=" . $this->float . " and " . 'string' . "=" . $this->string;
    }
}
//клас нащадка
class Child1 extends Parent1{
	private $arrayy=['1','2','3','4'];

	function __construct($float, $string) {
    	//виклик батьківського конструктора
		parent::__construct($float, $string);
		print('Child constr<br/>');
	}

	public function createHashArray() {
		$hasharray;
        //використання foreach та заповнення hash-масиву
		foreach ($this->arrayy as $value) {
			$hasharray[$value]=2*(int)$value;
		}
		return $hasharray;
	}
}
//об'єкти
$ch=new Child1(12.2, 'hello from the other side');
$p=new Parent1(12, 'hello from the another team');
//розіменування масиву
var_dump($ch->createHashArray());
echo '- hash-масив та його розіменування<br/>';
echo 'Змінні: ' . $ch->getResult();
$array1=array(1,2,3,4);
$string1='string';
$array2;
$string2;
//реалізація методів explode та implode
$array2=explode('t', $string1);
$string2=implode('->', $array1);
echo "<br/>implode string: " . $string2 . "<br/>explode array: ";
foreach($array2 as $value) {echo $value . ' ';}
//порівняння
if($string1!=$string2) echo "<br/>рядки не співпадають";
else echo "<br/>рядки співпадають";
if(1>=0.5) echo "<br/>1 більша або рівна";
//реалізація Сінглтону
class Singleton {
	private static $instance;
	private $integer;

	private function __construct() {}
    private function __clone() {}
	public function __wakeup() {}

	public static function getInstance(): Singleton {
		if(self::$instance === null) self::$instance=new self();
		return self::$instance;
	}

	public function setter($integer){
		$this->integer=$integer;
	}

	public function getter(){
		return $this->integer;
	}
}
//приклад Сінглтону з об'єктами
$instance1=Singleton::getInstance();
$instance2=Singleton::getInstance();
$instance1->setter(100);
$instance2->setter(200);
echo '<br/>' . $instance1->getter();
?>

