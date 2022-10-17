<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DetailedPlaceFields extends \ArrayObject
{
    /**
     * 
     *
     * @var Geo
     */
    protected $geo;
    /**
     * 
     *
     * @return Geo
     */
    public function getGeo() : Geo
    {
        return $this->geo;
    }
    /**
     * 
     *
     * @param Geo $geo
     *
     * @return self
     */
    public function setGeo(Geo $geo) : self
    {
        $this->geo = $geo;
        return $this;
    }
}