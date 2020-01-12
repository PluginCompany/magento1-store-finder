<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store Location EAV admin block
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocationeav
    extends Mage_Adminhtml_Block_Widget_Grid_Container {
    /**
     * constructor
     * @access public
     * @return void
     * @author Milan Simek
     */
    public function __construct(){
        $this->_controller         = 'adminhtml_storelocationeav';
        $this->_blockGroup         = 'plugincompany_storelocator';
        parent::__construct();
        $this->_headerText         = Mage::helper('plugincompany_storelocator')->__('Store Location EAV');
        $this->_updateButton('add', 'label', Mage::helper('plugincompany_storelocator')->__('Add Store Location EAV'));

        $this->setTemplate('plugincompany_storelocator/grid.phtml');
    }
}
