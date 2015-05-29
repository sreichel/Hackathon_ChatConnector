<?php
/**
 * Hackathon_ChatConnector extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Hackathon
 * @package        Hackathon_ChatConnector
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Queue resource model
 *
 * @category    Hackathon
 * @package     Hackathon_ChatConnector
 * @author      Sander Mangel <sander@sandermangel.nl>
 */
class Hackathon_ChatConnector_Model_Resource_Queue extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * _construct
     *
     * @access public
     */
    public function _construct()
    {
        $this->_init('hackathon_chatconnector/queue', 'entity_id');
    }

    /**
     * _beforeSave
     *
     * @param Mage_Core_Model_Abstract $object
     * @return Mage_Core_Model_Resource_Db_Abstract
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
        $object->setUpdatedAt($this->formatDate(true));
        if ($object->isObjectNew()) {
            $object->setCreatedAt($this->formatDate(true));
        }
        return parent::_beforeSave($object);
    }
}