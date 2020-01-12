<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Store Finder, released under the MIT License.
 * See the LICENSE file in the project root.
 */
/**
 * Store location comments controller
 *
 * @category    Plugincompany
 * @package     Plugincompany_Storelocator
 * @author      Milan Simek
 */
class Plugincompany_Storelocator_Storelocation_Customer_CommentController
    extends Mage_Core_Controller_Front_Action {
    /**
     * Action predispatch
     * Check customer authentication for some actions
     * @access public
     * @author Milan Simek
     */
    public function preDispatch() {
        parent::preDispatch();
        if (!Mage::getSingleton('customer/session')->authenticate($this)) {
            $this->setFlag('', self::FLAG_NO_DISPATCH, true);
        }
    }
    /**
     * List comments
     * @access public
     * @author Milan Simek
     */
    public function indexAction() {
        $this->loadLayout();
        $this->_initLayoutMessages('catalog/session');
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('checkout/session');
        if ($navigationBlock = $this->getLayout()->getBlock('customer_account_navigation')) {
            $navigationBlock->setActive('plugincompany_storelocator/storelocation_customer_comment/');
        }
        if ($block = $this->getLayout()->getBlock('storelocation_customer_comment_list')) {
            $block->setRefererUrl($this->_getRefererUrl());
        }

        $this->getLayout()->getBlock('head')->setTitle($this->__('My Store Comments'));

        $this->renderLayout();
    }
    /**
     * View comment
     * @access public
     * @author Milan Simek
     */
    public function viewAction() {
        $commentId = $this->getRequest()->getParam('id');
        $comment = Mage::getModel('plugincompany_storelocator/storelocation_comment')->load($commentId);
        if (!$comment->getId() || $comment->getCustomerId() != Mage::getSingleton('customer/session')->getCustomerId() || $comment->getStatus() != Plugincompany_Storelocator_Model_Storelocation_Comment::STATUS_APPROVED) {
            $this->_forward('no-route');
            return;
        }
        $storelocation = Mage::getModel('plugincompany_storelocator/storelocation')
                ->load($comment->getStorelocationId());
        if (!$storelocation->getId() || $storelocation->getStatus() != 1){
            $this->_forward('no-route');
            return;
        }
        $stores = array(Mage::app()->getStore()->getId(), 0);
        if (count(array_intersect($stores, $comment->getStoreId())) == 0) {
            $this->_forward('no-route');
            return;
        }
        if (count(array_intersect($stores, $storelocation->getStoreId())) == 0) {
            $this->_forward('no-route');
            return;
        }
        Mage::register('current_comment', $comment);
        Mage::register('current_storelocation', $storelocation);
        $this->loadLayout();
        $this->_initLayoutMessages('catalog/session');
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('checkout/session');
        if ($navigationBlock = $this->getLayout()->getBlock('customer_account_navigation')) {
            $navigationBlock->setActive('plugincompany_storelocator/storelocation_customer_comment/');
        }
        if ($block = $this->getLayout()->getBlock('customer_storelocation_comment')) {
            $block->setRefererUrl($this->_getRefererUrl());
        }
        $this->getLayout()->getBlock('head')->setTitle($this->__('My Store Comments'));
        $this->renderLayout();
    }
}
