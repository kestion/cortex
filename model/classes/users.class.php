<?php

	class Users extends MyDataObject
	{

		public $id;
		public $email;
		public $login;
		public $password;

		public $information;
		public $task_groups;
		public $collaborators;
		public $collaborators_group;
		public $tasks;
		 
		public $tablename = 'users';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}
		
		public function SetEmail($email)
		{
			$this->email = $email;
		}
		 
		public function GetEmail()
		{
			return $this->email;
		}
		
		public function SetLogin($login)
		{
			$this->login = $login;
		}
		 
		public function GetLogin()
		{
			return $this->login;
		}
		
		public function SetPassword($password)
		{
			$this->password = $password;
		}
		 
		public function GetPassword()
		{
			return $this->password;
		}		
	
	}

?>