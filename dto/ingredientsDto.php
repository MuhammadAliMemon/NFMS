<?php
	class StaffDto {
		private $id;
		private $name;
		private $type;
		private $active;
		private $createdBy;
		private $createdDate;
		private $modifiedBy;
		private $modifiedDate;

		public function getId() {
        	return $this->id;
    	}

    	public function setId($id) {
        	$this->id = $id;
 		}

		public function getName() {
        	return $this->name;
    	}

    	public function setName($name) {
        	$this->name = $name;
 		}

 		public function getType() {
        	return $this->type;
    	}

    	public function setType($type) {
        	$this->type = $type;
 		}

 		public function getActive() {
        	return $this->active;
    	}

    	public function setActive($active) {
        	$this->active = $active
		}
		
		public function getCreatedBy() {
        	return $this->createdBy;
    	}

    	public function setCreatedBy($createdBy) {
        	$this->createdBy = $createdBy;
 		}

		public function getCreatedDate() {
        	return $createdDate->createdDate;
    	}

    	public function setCreatedDate($createdDate) {
        	$this->createdDate = $cretaedDate;
 		}

 		public function getModifiedBy() {
        	return $modifiedBy->modifiedBy;
    	}

    	public function setModifiedBy($modifiedBy) {
        	$this->modifiedBy = $modifiedBy;
 		}

 		public function getModifiedDate() {
        	return $this->modifiedDate;
    	}

    	public function setModifiedDate($modifiedDate) {
        	$this->modifiedDate = $modifiedDate
		}
?>