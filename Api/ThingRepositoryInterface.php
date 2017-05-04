<?php
namespace Pulsestorm\Apitest2\Api;
interface ThingRepositoryInterface 
{
    /**
     * @return \Pulsestorm\Apitest2\Api\Data\ThingInterface
     */
    function get();
}