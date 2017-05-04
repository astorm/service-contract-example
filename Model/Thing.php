<?php
namespace Pulsestorm\Apitest2\Model;

class Thing implements \Pulsestorm\Apitest2\Api\Data\ThingInterface
{
    /**
     * {@inheritdoc}
     */
     public function getId()
     {
        return $this->id;
     }        
     
    /**
     * {@inheritdoc}
     */     
     public function setId($id)
     {
        $this->id = $id;
        return $this;
     }
}
