<?php

	class Tasks extends MyDataObject
	{

		public $id;
		public $task_group_id;
		public $cat;
		public $title;
		public $owner;
		public $description;
		public $start_date;
		public $end_date;
		public $status;

		public $information;
		public $users;
		public $task_groups;
		public $collaborators_group;
		public $collaborators;
		 
		public $tablename = 'task_groups';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}
		
		public function SetTaskGroupId($task_group_id)
		{
			$this->task_group_id = $task_group_id;
		}
		 
		public function GetTaskGroupId()
		{
			return $this->task_group_id;
		}
		
		public function SetCat($cat)
		{
			$this->cat = $cat;
		}
		 
		public function GetCat()
		{
			return $this->cat;
		}
		
		public function SetTitle($title)
		{
			$this->title = $title;
		}
		 
		public function GetTitle()
		{
			return $this->title;
		}
		
		public function SetOwner($owner)
		{
			$this->owner = $owner;
		}
		 
		public function GetOwner()
		{
			return $this->owner;
		}
		
		public function SetDescription($description)
		{
			$this->description = $description;
		}
		 
		public function GetDescription()
		{
			return $this->description;
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