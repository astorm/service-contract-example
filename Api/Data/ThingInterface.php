<?php
namespace Pulsestorm\Apitest2\Api\Data;
interface ThingInterface 
{

    /**
     * @return int
     */
     function getId();
     
    /**
     * @return $this     
     */   
     public function setId($id);

}