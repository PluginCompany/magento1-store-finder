<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location view block
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Storelocation_View
    extends Mage_Core_Block_Template {
    /**
     * get the current store location
     * @access public
     * @return mixed (Plugincompany_Storelocator_Model_Storelocation|null)
     * @author Milan Simek
     */
    public function getCurrentStorelocation(){
        return Mage::registry('current_storelocation');
    }
    /**
     * get rating flag
     * @access public
     * @return bool
     * @author Milan Simek
     */
    public function isRatingEnable() {
        return Mage::helper('plugincompany_storelocator')->isRatingEnable();
    }
}
