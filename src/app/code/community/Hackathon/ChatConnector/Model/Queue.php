<?php

/**
 * Hackathon_ChatConnector extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Hackathon
 *
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Queue model.
 *
 * @category    Hackathon
 *
 * @author      Sander Mangel <sander@sandermangel.nl>
 */
class Hackathon_ChatConnector_Model_Queue extends Mage_Core_Model_Abstract
{
    const STATUS_PENDING = 1;
    const STATUS_PROCESSED = 2;
    const STATUS_FAILED = 3;

    /**
     * Init the resource model.
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('hackathon_chatconnector/queue');
    }
}
