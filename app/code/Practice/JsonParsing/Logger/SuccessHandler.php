<?php

namespace Practice\JsonParsing\Logger;

use Monolog\Logger;

class SuccessHandler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = Logger::WARNING;

    protected $fileName = '/var/log/success.log';
}
