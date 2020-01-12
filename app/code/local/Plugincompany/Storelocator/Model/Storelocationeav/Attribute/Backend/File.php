<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Admin backend source model for files
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Model_Storelocationeav_Attribute_Backend_File
    extends Mage_Eav_Model_Entity_Attribute_Backend_Abstract {

    /**
     * Save uploaded file and set its name to storelocationeav object
     * @access public
     * @param Varien_Object $object
     * @return null
     * @author Milan Simek
     */
    public function afterSave($object){
        $value = $object->getData($this->getAttribute()->getName());

        if (is_array($value) && !empty($value['delete'])) {
            $object->setData($this->getAttribute()->getName(), '');
            $this->getAttribute()->getEntity()
                ->saveAttribute($object, $this->getAttribute()->getName());
            return;
        }

        $path = Mage::helper('plugincompany_storelocator/storelocationeav')->getFileBaseDir();

        try {
            $uploader = new Varien_File_Uploader($this->getAttribute()->getName());
            //set allowed file extensions if you need
            //$uploader->setAllowedExtensions(array('mp4', 'mov', 'f4v', 'flv', '3gp', '3g2', 'mp3', 'aac', 'm4a', 'swf'));
            $uploader->setAllowRenameFiles(true);
            $uploader->setFilesDispersion(true);
            $result = $uploader->save($path);
            $object->setData($this->getAttribute()->getName(), $result['file']);
            $this->getAttribute()->getEntity()->saveAttribute($object, $this->getAttribute()->getName());
        } catch (Exception $e) {
        	if ($e->getCode() != 666){
        		//throw $e;
        	}
            return;
        }
    }
}
