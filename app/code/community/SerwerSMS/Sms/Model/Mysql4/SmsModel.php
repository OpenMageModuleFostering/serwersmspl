<?php
/**
 *
 *	@copyright  Copyright (c) 2012-2013 SerwerSMS.pl
 *      @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *      @author     Serwer SMS (http://www.serwersms.pl)
 */

class SerwerSMS_Sms_Model_Mysql4_SmsModel extends Mage_Core_Model_Mysql4_Abstract{
    
    public function _construct(){
        $this->_init('serwersms_model/SmsModel','id');
    }
}

?>