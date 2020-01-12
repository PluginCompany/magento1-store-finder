<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Storelocation_Product_Store_List_Pager extends Mage_Page_Block_Html_Pager {

    public function getPagerUrl($params=array())
    {
        $urlParams = array();
        $urlParams['_current']  = true;
        $urlParams['_escape']   = true;
        $urlParams['_use_rewrite']   = false;
        $urlParams['_query']    = $params;
        $urlParams['product_id'] = $this->getRequest()->getParam('id');
        $url = Mage::getUrl('plugincompany_storelocator/storelocation/productPageStoreListing', $urlParams);
        return $url;
    }

}