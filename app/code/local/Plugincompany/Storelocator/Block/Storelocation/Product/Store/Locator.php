<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Storelocation_Product_Store_Locator
extends Mage_Core_Block_Template {

    protected function showInProductTabs(){
        return (bool) Mage::getStoreConfig('plugincompany_storelocator/product_detail_page/show_locator')
        && (bool) Mage::getStoreConfig('plugincompany_storelocator/product_detail_page/enable_store_inventory_locator');
    }

    protected function _toHtml()
    {
        if(!$this->showInProductTabs()){
            return '';
        }

        return $this->renderView();
    }

}