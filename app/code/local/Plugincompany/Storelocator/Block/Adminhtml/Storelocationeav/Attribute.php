<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store Location EAV admin attribute block
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocationeav_Attribute
    extends Mage_Adminhtml_Block_Widget_Grid_Container {
    /**
     * constructor
     * @access public
     * @author Milan Simek
     */
    public function __construct(){
        $this->_controller = 'adminhtml_storelocationeav_attribute';
        $this->_blockGroup = 'plugincompany_storelocator';
        $this->_headerText = Mage::helper('plugincompany_storelocator')->__('Manage Custom Store Attributes');
        parent::__construct();
        $this->_updateButton('add', 'label', Mage::helper('plugincompany_storelocator')->__('Add New Attribute'));
    }
}
