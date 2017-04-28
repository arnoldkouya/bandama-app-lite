<?php

namespace App\Test;

use \App\Service\HelloService;


class HelloServiceTest extends \PHPUnit_Framework_TestCase  {
    public function testHello() {
        $service = new HelloService();

        $this->assertEquals('Hello Bandama', $service->hello('Bandama'));
    }
}