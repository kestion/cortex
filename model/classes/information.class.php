<?php

	class Information extends MyDataObject
	{

		public $id;
		public $description;
		public $title;

		public $users;
		public $task_groups;
		public $collaborators;
		public $tasks;
		public $collaborators_group;
		 
		public $tablename = 'information';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}
		
		public function SetDescription($description)
		{
			$this->description = $description;
		}
		 
		public function GetDescription()
		{
			return $this->description;
		}
		
			public function SetTitle($title)
		{
			$this->title = $title;
		}
		 
		public function GetTitle()
		{
			return $this->title;
		}
	
	}
?>

