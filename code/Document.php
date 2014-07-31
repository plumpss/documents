<?php

class Document extends DataObject {
	
	private static $db = array(
		'SortOrder'	=> 'Int'
	);
	
	private static $has_one = array(
		'File' => 'File',
		'Page' => 'Page'
	);

	/**
	 * CMS
	 */
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->removeByName('PageID');
		$fields->removeByName('SortOrder');
		
		$fields->dataFieldByName('File')->setFolderName('Uploads/documents');
		
		return $fields;
	}
	
	public function canCreate($member = NULL) { return TRUE; } 
	public function canEdit($member = NULL) { return TRUE; } 
	public function canDelete($member = NULL) { return TRUE; }
	public function canView($member = NULL) { return TRUE; }

	/**
	 * Data
	 */
	
	public function Title() {
		return $this->FileID ? $this->File()->Title : NULL;
	}

	public function Link() {
		return $this->FileID ? $this->File()->URL : NULL;
	}
	
}
