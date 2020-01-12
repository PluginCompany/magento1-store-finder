<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location admin block
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */

class Plugincompany_Storelocator_Block_Adminhtml_Cache_Additional extends Mage_Adminhtml_Block_Template
{
    /**
     * Get clean cache url
     *
     * @return string
     */
    public function getCleanExternalCacheUrl()
    {
        return $this->getUrl('*/storelocator_storecache/clean');
    }
    /**
     * Check if block can be displayed
     *
     * @return bool
     */
    public function canShowButton()
    {
        return Mage::helper('plugincompany_storelocator')->isCacheEnabled() && Mage::getSingleton('admin/session')->isAllowed('cms/plugincompany_storelocator');
    }
}