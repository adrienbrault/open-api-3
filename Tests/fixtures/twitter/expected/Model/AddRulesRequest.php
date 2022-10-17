<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AddRulesRequest extends \ArrayObject
{
    /**
     * 
     *
     * @var RuleNoId[]
     */
    protected $add;
    /**
     * 
     *
     * @return RuleNoId[]
     */
    public function getAdd() : array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param RuleNoId[] $add
     *
     * @return self
     */
    public function setAdd(array $add) : self
    {
        $this->add = $add;
        return $this;
    }
}