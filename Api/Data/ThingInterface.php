<?php
namespace Pulsestorm\Apitest2\Api\Data;
interface ThingInterface 
{

    /**
     * @return int
     */
     function getId();
     
    /**
     * @param int $id   
     * @return $this     
     */   
     public function setId($id);

}