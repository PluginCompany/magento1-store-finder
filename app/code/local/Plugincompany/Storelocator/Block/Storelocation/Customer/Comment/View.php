<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location customer comments list
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Storelocation_Customer_Comment_View
    extends Mage_Customer_Block_Account_Dashboard {
    /**
     * get current comment
     * @access public
     * @return Plugincompany_Storelocator_Model_Storelocation_Comment
     * @author Milan Simek
     */
    public function getComment() {
        return Mage::registry('current_comment');
    }
    /**
     * get current store location
     * @access public
     * @return Plugincompany_Storelocator_Model_Storelocation
     * @author Milan Simek
     */
    public function getStorelocation() {
        return Mage::registry('current_storelocation');
    }
}
