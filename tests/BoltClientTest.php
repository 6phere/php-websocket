<?php

namespace Sixphere\WebSocket\Tests;


use Sixphere\WebSocket\Client;
use Sixphere\WebSocket\Tests\Stubs\NotAValidProtocolStub;
use Sixphere\WebSocket\Tests\Stubs\ProtocolStub;
use React\Promise\Promise;
use React\Promise\PromiseInterface;

class BoltClientTest extends TestCase {

    protected $loop;
    protected $resolver;

    public function setUp()
    {
        $this->loop = $this->getMockBuilder('React\EventLoop\LoopInterface')->getMock();
        $this->resolver = $this->getMockBuilder('React\Dns\Resolver\Resolver')->disableOriginalConstructor()->getMock();;

        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /** @test */
    public function testConstructor(){

        $uri = 'ws://localhost/example';

        $c = new Client($uri, $this->loop, $this->resolver, ProtocolStub::class);

        $this->assertInstanceOf(Client::class, $c, 'Constructor should return a Bolt\Client object');
        $this->assertEquals($uri, $c->getURI(), 'Constructor should set the URI correctly');
        $this->assertEquals(Client::STATE_CLOSED, $c->getState(), 'Constructor should set the initial state to closed');

    }

    /** @test */
    public function constructorWithBadUriShouldFail(){

        $this->expectException(\InvalidArgumentException::class);

        $c = new Client('ws:/!localhost/example', $this->loop, $this->resolver);

    }

    /** @test */
    public function constructorWithInvalidProtocolShouldFail(){

        $this->expectException(\InvalidArgumentException::class);

        $c = new Client('ws://localhost/example', $this->loop, $this->resolver, NotAValidProtocolStub::class);

    }

    /** @test */
    public function testConnect(){

        $uri = 'ws://localhost/example';

        $c = new Client($uri, $this->loop, $this->resolver);

        $connectionPromise = $c->connect();

        $this->assertInstanceOf(PromiseInterface::class, $connectionPromise, 'Connect function should return a promise');

    }



}