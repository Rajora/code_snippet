<?php 
	interface Product{
		public function operation(): string;
	}
	
	abstract class Creater{
		abstract public function factoryMethod() : Product;	
		public function someOperation(): String{
			$this->factoryMethod();
			$result = "Creater: The some creator's code has just worked with ".$product->operation();
			return $result;
		}
	}

	class ConcreatCreator1 extends Creater{
		public function factoryMethod(): Product{
			return new ConcreatCreator1();
		}	
		
		public function operation():  string{
			return "{Result of the ConcreatCreator1}";
		}
	}
	
	class ConcreatCreator2 extends Creater{
		public function factoryMethod(): Product{
			return ConcreatCreator2();
		}
		
		public function operation(): string{
			return "{Result of the ConcreatCreator2}";
		}
	}
	
	function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo "App: Launched with the ConcreatCreator1.\n";
clientCode(new ConcreatCreator1());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());	
?>
