<?php

namespace Practice\JsonParsing\Logger;

use Magento\Framework\Filesystem\DriverInterface;
use Monolog\Logger;
use Practice\JsonParsing\Controller\Index\NiscalHelper;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = Logger::WARNING;
    protected $_helper;
    protected $isSuccess;
    protected $filename;

    public function __construct( DriverInterface $filesystem, NiscalHelper $helper, ?string $filePath = null, ?string $fileName = null)
    {
        $this->_helper = $helper;
        $this->getFileName();
        parent::__construct($filesystem, $filePath, $fileName);
    }

    private function getFileName(){
        $this->isSuccess = $this->_helper->getIsSuccess();
        if($this->isSuccess){
            $this->fileName = '/var/log/mycustom.log';
        } else {
            $this->fileName = '/var/log/mycustomNischaltwo.log';
        }
        return $this->fileName;
    }
    public function setFile($fileName) {
        $this->fileName = $fileName;
    }
}
