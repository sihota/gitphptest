<?php
/*
you can skip to include or require .php file if you used
following lines in your composer.json file as:
  "autoload": { "classmap": ["src/"]}
*/
require "customer.php";

use PHPUnit\Framework\TestCase;

class customertest extends TestCase
{
	
	protected $objCustomer;
	
	
	public function setUp():void
	{
		$this->objCustomer = new customer();
	}
	
	
	public function testCustomer()
	{
		
		if(isset($this->objCustomer))
		{
			
			try{
				$this->objCustomer->setFirstName("Amarpal");
				$this->assertEquals($this->objCustomer->getFirstName(),"Amar");
			}
			catch(EmptyFirstNameException $e)
			{
				  $this->assertEquals("EmptyFirstNameException", $e->getMessage());
			}
			
			
		}
	}


	public function tearDown():void	
	{
		if(isset($this->objCustomer))
			unset($this->objCustomer);
	}

	
}
?>