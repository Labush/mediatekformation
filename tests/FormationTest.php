<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests;

use App\Entity\Formation;
use PHPUnit\Framework\TestCase;

/**
 * Description of FormationTest
 *
 * @author Fdata
 */
class FormationTest extends TestCase{
    //put your code here
    public function testGetPublishedAtString(){
        $formation = new Formation();
        $formation->setPublishedAt(new \DateTime ("2022-01-29"));
        $this->assertEquals("29/01/2022", $formation->getPublishedAtString());
    }
}
