<?php

class Document extends DataObject {
	
	private static $db = array(
		'SortOrder'	=> 'Int'
	);
	
	private static $has_one = array(
		'File' => 'File',
		'Page' => 'Page'
	);
	
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
	
}
