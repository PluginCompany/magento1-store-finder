<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Adminhtml store location eav attribute edit page tabs
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocationeav_Attribute_Edit_Tabs
    extends Mage_Adminhtml_Block_Widget_Tabs {
    /**
     * constructor
     * @access public
     * @author Milan Simek
     */
    public function __construct() {
        parent::__construct();
        $this->setId('storelocationeav_attribute_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('plugincompany_storelocator')->__('Attribute Information'));
    }
    /**
     * add attribute tabs
     * @access protected
     * @return Plugincompany_Storelocator_Adminhtml_Storelocationeav_Attribute_Edit_Tabs
     * @author Milan Simek
     */
    protected function _beforeToHtml() {
        $this->addTab('main', array(
            'label'     => Mage::helper('plugincompany_storelocator')->__('Attribute Properties'),
            'title'     => Mage::helper('plugincompany_storelocator')->__('Attribute Properties'),
            'content'   => $this->getLayout()->createBlock('plugincompany_storelocator/adminhtml_storelocationeav_attribute_edit_tab_main')->toHtml(),
            'active'    => true
        ));
        $this->addTab('labels', array(
            'label'     => Mage::helper('plugincompany_storelocator')->__('Attribute Label / Options'),
            'title'     => Mage::helper('plugincompany_storelocator')->__('Attribute Label / Options'),
            'content'   => $this->getLayout()->createBlock('plugincompany_storelocator/adminhtml_storelocationeav_attribute_edit_tab_options')->toHtml(),
        ));
        return parent::_beforeToHtml();
    }
}
