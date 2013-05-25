<?php

	class Collaborators 
	{

		public $id;
		public $task_group_id;
		public $email;

		public $information;
		public $users;
		public $task_groups;
		public $tasks;
		public $collaborators_group;
		 
		public $tablename = 'collaborators';
	  
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
		
		public function SetEmail($email)
		{
			$this->email = $email;
		}
		 
		public function GetEmail()
		{
			return $this->email;
		}
	
	}

?>