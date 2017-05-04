<?php
namespace Pulsestorm\Apitest2\Model;

class Thing implements \Pulsestorm\Apitest2\Api\Data\ThingInterface
{
    /**
     * @var int $id
     */                
    protected $id;

    public function getId()
    {
       return $this->id;
    }        
    public function setId($id)
    {
       $this->id = $id;
       return $this;
    }
}
