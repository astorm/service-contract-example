<?php
namespace Pulsestorm\Apitest2\Api;
interface ThingRepositoryInterface 
{
    /**
     * @param int $id
     * @return \Pulsestorm\Apitest2\Api\Data\ThingInterface
     */
    function get($id);
}