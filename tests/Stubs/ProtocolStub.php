<?php

namespace Sixphere\WebSocket\Tests\Stubs;

use Sixphere\WebSocket\Protocol\AbstractProtocol;

class ProtocolStub extends AbstractProtocol {

    public function onStreamData(&$buffer)
    {
        // TODO: Implement onStreamData() method.
    }

    public function upgrade()
    {
        // TODO: Implement upgrade() method.
    }

    public function send($string)
    {
        // TODO: Implement send() method.
    }

    public static function getVersion()
    {
        // TODO: Implement getVersion() method.
    }
}