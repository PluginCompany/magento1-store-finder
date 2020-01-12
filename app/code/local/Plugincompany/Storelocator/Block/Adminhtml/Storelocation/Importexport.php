<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location admin edit form
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocation_Importexport
    extends Mage_Adminhtml_Block_Widget_Form_Container {
    /**
     * constructor
     * @access public
     * @return void
     * @author Milan Simek
     */
    public function __construct(){
        parent::__construct();
        $this->_blockGroup = 'plugincompany_storelocator';
        $this->_controller = 'adminhtml_storelocation';
        $this->removeButton('save');
        $this->removeButton('delete');
        $this->removeButton('reset');
    }
    /**
     * get the edit form header
     * @access public
     * @return string
     * @author Milan Simek
     */
    public function getHeaderText(){
        return Mage::helper('plugincompany_storelocator')->__('Import / Export Store Locations');
    }
}
