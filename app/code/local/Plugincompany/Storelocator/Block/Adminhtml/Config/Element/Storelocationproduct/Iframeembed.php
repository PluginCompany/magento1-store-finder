<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Adminhtml_Config_Element_Storelocationproduct_Iframeembed extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    public function __construct()
    {
        $this->setTemplate('plugincompany/storelocator/config/iframeembed/storelocationproduct/iframeembed.phtml');
    }
    /**
     * Retrieve Element HTML fragment
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->toHtml();
    }


}
