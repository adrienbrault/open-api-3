<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EmptySpace extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $stringProperty;
    /**
     * 
     *
     * @return string
     */
    public function getStringProperty() : string
    {
        return $this->stringProperty;
    }
    /**
     * 
     *
     * @param string $stringProperty
     *
     * @return self
     */
    public function setStringProperty(string $stringProperty) : self
    {
        $this->stringProperty = $stringProperty;
        return $this;
    }
}