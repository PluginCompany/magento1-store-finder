<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Adminhtml_Catalog_Product_Tab_Storelocation extends Mage_Adminhtml_Block_Widget_Grid
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function _getProduct()
    {
        return Mage::registry('current_product');
    }


    //Label to be shown in the tab
    public function getTabLabel()
    {
        return Mage::helper('core')->__('Store Locations');
    }

    public function getTabTitle()
    {
        return Mage::helper('core')->__('Store Locations');
    }

    public function canShowTab()
    {
        if ($this->_getProduct()->getId() 
                && Mage::helper('plugincompany_storelocator/storelocation')->isManuallyManageInventoryLocatorEnabled()
        ){
            return true;
        }
        return false;
    }

    public function isHidden()
    {
        return false;
    }

    public function getTabUrl()
    {
        return $this->getUrl('adminhtml/storelocator_storelocation/storeLocation', array('_current' => true));
    }
    
    
    public function getTabClass()
    {
        return 'ajax';
    }
}