<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Storelocation_Storefinder extends Mage_Core_Block_Template {

    public function getFilterAttributes(){
        $entity = Mage::getModel('eav/entity_type')->load('plugincompany_storelocator_storelocationeav', 'entity_type_code');
        $attributes = Mage::getResourceModel('eav/entity_attribute_collection')
            ->setEntityTypeFilter($entity->getEntityTypeId())
            ->addFieldToFilter('in_finder',1)
            ->addFieldToFilter('frontend_input',array('in'=>array('select','boolean','multiselect')))
            ->addFieldToFilter('additional_table.store_ids',
                array(
                    array('finset' => 0),
                    array('finset' => Mage::app()->getStore()->getId())
                )
            )
        ;
        $attributes->getSelect()->order('additional_table.position', 'ASC');
        return $attributes;
    }

    public function getFilterJSON(){
        $entity = Mage::getModel('eav/entity_type')->load('plugincompany_storelocator_storelocationeav', 'entity_type_code');
        $attributes = Mage::getResourceModel('eav/entity_attribute_collection')
            ->setEntityTypeFilter($entity->getEntityTypeId())
            ->addFieldToFilter('in_finder',1)
        ;
        $attributes->getSelect()->order('additional_table.position', 'ASC');
        $data = array();
        foreach($attributes as $attr){
            $data[$attr->getAttributeCode()] = $attr->getAttributeCode() . '-filters-container';
        }
        return json_encode($data);
    }

    public function canGeoCode(){
        if(Mage::getStoreConfigFlag('plugincompany_storelocator/storefinder/auto_geocode')
            && $this->canProductPageGeoCode()){
            return 'true';
        }
        return 'false';
    }

    public function canProductPageGeoCode(){
        if(!$this->getRequest()->getParam('product_id')){
            return true;
        }
        if(Mage::getStoreConfigFlag('plugincompany_storelocator/product_detail_page/geocode')){
            return true;
        }
        return false;
    }

    public function canMaxDistance(){
        if(Mage::getStoreConfigFlag('plugincompany_storelocator/storefinder/max_distance')){
            return 'true';
        }
        return 'false';
    }
    
    public function canNameFilter(){
        if(Mage::getStoreConfigFlag('plugincompany_storelocator/storefinder/name_filter')){
            return 'true';
        }
        return 'false';
    }

    public function getLengthUnitText(){
        $l = Mage::getStoreConfig("plugincompany_storelocator/storefinder/lengthunit");
        if($l == 'km'){
            return $this->__('Kilometers');
        }
        return $this->__('Miles');
    }

    protected function _includeAllLibs(){
        return Mage::registry('include_all_libs');
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
    
    /**
     * Check if SSL enabled
     * @access public
     * @return bool
     * @author Milan Simek
     */
    public function isSecureUrl(){
        return Mage::app()->getStore()->isCurrentlySecure();
    }
    
    /**
     * Get json url
     * @access public
     * @return string
     * @author Milan Simek
     */
    public function getDataLocation(){
        if(!$storeId = Mage::app()->getRequest()->getParam('store_id', 0)){
            $storeId = Mage::app()->getStore()->getStoreId();
        }

        if(!$productId = Mage::app()->getRequest()->getParam('product_id', 0)){
            $productId = Mage::registry('current_product')  ? Mage::registry('current_product')->getId() : 0;
        }
        
        $urlFilter = '';
        if((bool)$storeId && (bool)$productId && (bool) Mage::getStoreConfig('plugincompany_storelocator/product_detail_page/manually_manage_inventory_locator')){
            $urlFilter = "store_id/{$storeId}/product_id/{$productId}/";
        }
        
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK, $this->isSecureUrl()) . '/plugincompany_storelocator/storelocation/storesjson/' . $urlFilter;
    }

    public function isProductPage(){
        return Mage::app()->getRequest()->getParam('product_id', 0);
    }

    public function getCategoryMarkersJson()
    {
        return json_encode($this->getCategoryMarkersArray(), JSON_UNESCAPED_SLASHES );
    }

    public function getCategoryMarkersArray()
    {
        $markers = array();
        foreach($this->getMarkerCollection() as $marker)
        {
            $markers[$marker->getCode()] = array(
                $this->getMarkerUrlByCode($marker->getCode()),
                38,
                38
            );
        }
        return $markers;
    }

    private function getMarkerCollection()
    {
        return Mage::getModel('plugincompany_storelocator/marker')->getCollection();
    }

    private function getMarkerUrlByCode($code)
    {
        return $this->getMarkerHelper()->getUrlForMarkerImageByCode($code);
    }

    private function getMarkerHelper()
    {
        return Mage::helper('plugincompany_storelocator/marker');
    }

    public function markerClusteringEnabled()
    {
        return Mage::getStoreConfigFlag('plugincompany_storelocator/storefinder/marker_clustering');
    }

    public function getMarkerClusterUrl()
    {
        $image1 = $this->getSkinUrl(
            'images/plugincompany/storelocator/markerclusterer/m1.png',
            array('_secure' => $this->isSecureUrl())
        );

        return str_replace('1.png', '', $image1);
    }

}