<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store Location EAV image field renderer helper
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Block_Adminhtml_Storelocationeav_Helper_Image
    extends Varien_Data_Form_Element_Image {
    /**
     * get the url of the image
     * @access protected
     * @return string
     * @author Milan Simek
     */
    protected function _getUrl(){
        $url = false;
        if ($this->getValue()) {
            $url = Mage::helper('plugincompany_storelocator/storelocationeav_image')->getImageBaseUrl().$this->getValue();
        }
        return $url;
    }
}
