<?php
namespace Mageplaza\HelloWorld\Controller\Index;
class Forward extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		
		$this->_forward('Index');
	}
}
