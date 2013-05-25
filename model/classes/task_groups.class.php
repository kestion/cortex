<?php

	class Task_groups extends MyDataObject
	{

		public $id;
		public $name;
		public $cat;
		public $start_date;
		public $end_date;
		public $status;

		public $information;
		public $users;
		public $collaborators;
		public $tasks;
		public $collaborators_group;
		 
		public $tablename = 'task_groups';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}
		
		public function SetName($name)
		{
			$this->name = $name;
		}
		 
		public function GetName()
		{
			return $this->name;
		}
		
		public function SetCat($cat)
		{
			$this->cat = $cat;
		}
		 
		public function GetCat()
		{
			return $this->cat;
		}
		
		public function SetStartDate($start_date)
		{
			$this->start_date = $start_date;
		}
		 
		public function GetStartDate()
		{
			return $this->start_date;
		}	
		
		public function SetEndDate($end_date)
		{
			$this->end_date = $end_date;
		}
		 
		public function GetEndDate()
		{
			return $this->end_date;
		}
		
		public function SetStatus($status)
		{
			$this->status = $status;
		}
		 
		public function GetStatus()
		{
			return $this->status;
		}	
	
	}

?>