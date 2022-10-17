<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class HideReplyResponse extends \ArrayObject
{
    /**
     * 
     *
     * @var HideReplyResponseData
     */
    protected $data;
    /**
     * 
     *
     * @return HideReplyResponseData
     */
    public function getData() : HideReplyResponseData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param HideReplyResponseData $data
     *
     * @return self
     */
    public function setData(HideReplyResponseData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}