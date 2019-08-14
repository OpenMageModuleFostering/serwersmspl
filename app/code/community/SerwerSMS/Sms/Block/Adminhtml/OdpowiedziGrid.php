<?php
/**
 *
 *	@copyright  Copyright (c) 2012-2013 SerwerSMS.pl
 *      @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *      @author     Serwer SMS (http://www.serwersms.pl)
 */

class SerwerSMS_Sms_Block_Adminhtml_OdpowiedziGrid extends Mage_Adminhtml_Block_Widget_Grid_Container{
    
    public function _construct(){
        
        // gdzie jest kontroler
        $this->_controller = 'adminhtml_odpowiedzi';
        $this->_blockGroup = 'sms';
        
        // tekst w naglowku admina
        $this->_headerText = 'Odpowiedzi SMS';
        
        // tekst na przycisku dodawania
        $this->_addButtonLabel = '';
        parent::_construct();
        
    }
    
}

?>