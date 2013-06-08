<?php
class group {
	
	public _construct($groupId) {
		$this->$group_id = $groupId;
		getGroupName();		
		listModerators();
	}

	private function listModerators(){
		
   }
	
	public function getGroupName() {
		
	}  
	 
   public $group_id;
   public $group_name;
	public $moderator_list
	
}
?>