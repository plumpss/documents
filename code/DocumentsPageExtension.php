<?php

class DocumentsPageExtension extends DataExtension {
	
	private static $has_many = array(
		'Documents' => 'Document'
	);
	
	public function updateCMSFields(FieldList $fields) {
		$this->addDocumentsTab($fields);
	}
	
	private function addDocumentsTab($fields) {
			
		$config = GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortOrder'));
		
		$config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
            'Title' => 'Title'
        ));
		
        $documentsField = new GridField(
            'Documents',
            'Documents',
            $this->owner->Documents(),
            $config
        );
		
		$fields->addFieldToTab('Root.Documents', $documentsField);
	}
	
}
