<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Adminhtml_Markers_Grid_ImageRenderer
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    private $value;

    public function render(Varien_Object $row)
    {
        $this->value =  $row->getData($this->getColumn()->getIndex());
        return $this->getMarkerImageTag();
    }

    private function getMarkerImageTag()
    {
        return "<img src='{$this->getMarkerImageUrl()}' style='max-width:50px' />";
    }

    private function getMarkerImageUrl()
    {
        return Mage::helper('plugincompany_storelocator/marker')
            ->getUrlForMarkerImageByPath($this->value);
    }

}
