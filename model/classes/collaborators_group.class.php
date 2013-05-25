<?php

	class Collaborators 
	{

		public $id;
		public $collaborator_id;
		public $task_group_id;

		public $information;
		public $users;
		public $task_groups;
		public $tasks;
		public $collaborators;
		 
		public $tablename = 'collaborators_group';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}
		
		public function SetCollaboratorId($collaborator_id)
		{
			$this->collaborator_id = $collaborator_id;
		}
		 
		public function GetCollaboratorId()
		{
			return $this->collaborator_id;
		}
		
		public function SetTaskGroupId($task_group_id)
		{
			$this->task_group_id = $task_group_id;
		}
		 
		public function GetTaskGroupId()
		{
			return $this->task_group_id;
		}
	
	}

?>