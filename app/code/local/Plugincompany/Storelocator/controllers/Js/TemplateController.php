<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location front contrller
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Js_TemplateController
    extends Mage_Core_Controller_Front_Action {

    public function loadInfowindowAction(){
        $this->loadLayout()
            ->getLayout()->getBlock('root')
            ->setTemplate('plugincompany_storelocator/storelocation/js/templates/infowindow-description.phtml');
        $this->renderLayout();
    }

    public function loadKmlInfowindowAction(){
        $this->loadLayout()
            ->getLayout()->getBlock('root')
            ->setTemplate('plugincompany_storelocator/storelocation/js/templates/kml-infowindow-description.phtml');
        $this->renderLayout();
    }

    public function loadLocationListAction(){
        $this->loadLayout()
            ->getLayout()->getBlock('root')
            ->setTemplate('plugincompany_storelocator/storelocation/js/templates/location-list-description.phtml');
        $this->renderLayout();
    }

    public function loadKmlLocationListAction(){
        $this->loadLayout()
            ->getLayout()->getBlock('root')
            ->setTemplate('plugincompany_storelocator/storelocation/js/templates/kml-location-list-description.phtml');
        $this->renderLayout();
    }
}
