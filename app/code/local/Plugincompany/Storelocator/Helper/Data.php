<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Storelocator default helper
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Helper_Data
    extends Mage_Core_Helper_Abstract {
    /**
     * convert array to options
     * @access public
     * @param $options
     * @return array
     * @author Milan Simek
     */
    public function convertOptions($options){
        $converted = array();
        foreach ($options as $option){
            if (isset($option['value']) && !is_array($option['value']) && isset($option['label']) && !is_array($option['label'])){
                $converted[$option['value']] = $option['label'];
            }
        }
        return $converted;
    }

    /**
     * Get rating flag
     * @access public
     * @return bool
     * @author Milan Simek
     */
    public function isRatingEnable() {
        return Mage::getStoreConfigFlag('plugincompany_storelocator/storepage/allow_rating') ? true : false;
    }
    
    
    /**
     * Cache cnabled flag
     * @access public
     * @return bool
     * @author Milan Simek
     */
    public function isCacheEnabled(){
        return Mage::getStoreConfigFlag('plugincompany_storelocator/cache/enabled') ? true : false;
    }

    public function getApiKey(){
        return Mage::getStoreConfig('plugincompany_storelocator/storelocation/api_key');
    }

    public function getApiKeyQueryString(){
        if($apiKey = Mage::helper('plugincompany_storelocator')->getApiKey()){
            return "&key=$apiKey";
        }
        return "";
    }
    
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('plugincompany_storelocator/storelocation/enabled');
    }

    public function filterCmsVar($value)
    {
        $helper = Mage::helper('cms');
        $processor = $helper->getBlockTemplateProcessor();
        return $processor->filter($value);
    }

}
