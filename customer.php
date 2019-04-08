<?php 

class EmptyFirstNameException extends Exception
{
	
}

class customer
{
    protected $firstname;
	protected $lastname;
	protected $emailaddress;
	protected $address;
	protected $state;
	protected $city;
	protected $zipcode;

	public function __construct()
	{
		
	}
	
	public function setFirstName($firstname):void 
	{
		if(!empty($firstname))
		{
			$this->firstname = $firstname;
		}
		else
		{
			throw new EmptyFirstNameException('Firstname should not be empty!');
		}
	}


	public function getFirstName():string
	{
		return $this->firstname;
	}
	
	public function setLastName($lastname):void
	{
		$this->lastname = $lastname;
	}
	
	public function getLastName():string
	{
		return $this->lastname;
	}

	public function setEmailAddress($emailaddress):void
	{
		$this->emailaddress = $emailaddress;
	}
	
	public function getEmailAddress():string
	{
		return $this->emailaddress;
	}
	
	public function setAddress($address):void
	{
		$this->address = $address;
	}

	public function getAddress():string
	{
		return $this->address;
	}
	
	public function setState($state):void
	{
		$this->state = $state;
	}

	public function getState():string
	{
		return $this->state;
	}
	
	public function setCity($city):void
	{
		$this->city = $city;
	}

	public function getCity():string
	{
		return $this->city;
	}

	public function setZipCode($zipcode):string
	{
		$this->zipcode = $zipcode;
	}	

	public function getZipCode():string
	{
		return $this->zipcode;
	}	

	public function __destruct()
	{
		
	   if(isset($this->firstname))
			unset($this->firstname);

	   if(isset($this->lastname))
			unset($this->lastname);

		if(isset($this->emailaddress))
			unset($this->emailaddress);
		
	   if(isset($this->address))
			unset($this->address);

	   if(isset($this->state))
			unset($this->state);

	   if(isset($this->city))
			unset($this->city);

	   if(isset($this->zip))
			unset($this->zip);
		
	}
}
?>