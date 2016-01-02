<?php

class Document extends DataObject
{
    
    private static $db = array(
        'SortOrder'    => 'Int'
    );
    
    private static $has_one = array(
        'File' => 'File',
        'Page' => 'Page'
    );

    /**
     * CMS
     */
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        
        $fields->removeByName('PageID');
        $fields->removeByName('SortOrder');
        
        $fields->dataFieldByName('File')->setFolderName('Uploads/documents');
        
        return $fields;
    }
    
    public function canCreate($member = null)
    {
        return true;
    }
    public function canEdit($member = null)
    {
        return true;
    }
    public function canDelete($member = null)
    {
        return true;
    }
    public function canView($member = null)
    {
        return true;
    }

    /**
     * Data
     */
    
    public function Title()
    {
        return $this->FileID ? $this->File()->Title : null;
    }

    public function Link()
    {
        return $this->FileID ? $this->File()->URL : null;
    }
}
