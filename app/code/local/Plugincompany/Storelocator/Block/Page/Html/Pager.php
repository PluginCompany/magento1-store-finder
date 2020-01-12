<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Storelocator_Block_Page_Html_Pager extends Mage_Page_Block_Html_Pager
{

    /**
     * Get pager url for frontend list pages
     *
     * @param array $params
     * @return string
     */
    public function getPagerUrl($params=array())
    {
        $paramString = http_build_query($params);

        $storeLocation = Mage::registry('current_storelocation');
        $url = $storeLocation->getStorelocationUrl() . '?' . $paramString;
        return $url;
    }

}