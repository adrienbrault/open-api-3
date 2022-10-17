<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TestGetBodyBaz extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $baz;
    /**
     * 
     *
     * @return string
     */
    public function getBaz() : string
    {
        return $this->baz;
    }
    /**
     * 
     *
     * @param string $baz
     *
     * @return self
     */
    public function setBaz(string $baz) : self
    {
        $this->baz = $baz;
        return $this;
    }
}