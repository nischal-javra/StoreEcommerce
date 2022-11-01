<?php

namespace Practice\JsonParsing\Controller\Index;

class NiscalHelper
{
    protected $success;
    public function getIsSuccess() {
        return $this->success;
    }

    public function setIsSucsess($success) {
        if($success){
            $this->success = true;
        } else {
            $this->success = false;
        }
    }

}
