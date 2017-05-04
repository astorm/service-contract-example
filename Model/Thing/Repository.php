<?php
namespace Pulsestorm\Apitest2\Model\Thing;

class Repository implements \Pulsestorm\Apitest2\Api\ThingRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        $object = new \Pulsestorm\Apitest\Model\Thing;
        $object->setId(1);
        return $object;        
    }
}
