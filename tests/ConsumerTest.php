<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Yonatan');
$consumer->setApellido('Castro');
$result = $consumer->nombreCompleto();
$this->assertEquals('Yonatan Castro', $result);
    }

    /**
    * Probar email válido
    */
   
}
