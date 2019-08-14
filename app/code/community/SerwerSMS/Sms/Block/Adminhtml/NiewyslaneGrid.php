<?php
/**
 *
 *	@copyright  Copyright (c) 2012-2013 SerwerSMS.pl
 *      @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *      @author     Serwer SMS (http://www.serwersms.pl)
 */

class SerwerSMS_Sms_Block_Adminhtml_NiewyslaneGrid extends Mage_Adminhtml_Block_Widget_Grid_Container{
    
    public function _construct(){
        
        // gdzie jest kontroler
        $this->_controller = 'adminhtml_niewyslane';
        $this->_blockGroup = 'sms';
        
        // tekst w naglowku admina
        $this->_headerText = 'Wiadomości niewyslane';
        
        // tekst na przycisku dodawania
        $this->_addButtonLabel = '';
        parent::_construct();
        
    }
    
}

?>