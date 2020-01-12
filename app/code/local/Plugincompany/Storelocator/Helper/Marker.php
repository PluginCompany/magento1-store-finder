<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Helper_Marker extends Mage_Core_Helper_Abstract
{

    private $markerCode;

    public function getUrlForMarkerImageByPath($markerPath)
    {
        return $this->getMediaUrl() . 'storelocation/image' . $markerPath;
    }


    public function getUrlForMarkerImageByCode($markerCode)
    {
        $this->markerCode = $markerCode;
        return $this->getMediaUrl() . 'storelocation/image' . $this->getImagePath();
    }

    private function getMediaUrl()
    {
        return Mage::getBaseUrl('media', $this->isSecure());
    }

    private function isSecure()
    {
        return Mage::app()->getStore()->isCurrentlySecure();
    }

    private function getImagePath()
    {
        return Mage::getModel('plugincompany_storelocator/marker')
            ->load($this->markerCode, 'code')
            ->getImage()
            ;
    }

}