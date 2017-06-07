<?php

use \App\Service\HelloService;

describe(HelloService::class, function() {

    describe('hello()', function() {
        it('return Hello $name', function() {
            $service = new HelloService();

            expect($service->hello('Bandama'))->toEqual('Hello Bandama');
        });
    });

});