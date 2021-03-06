<?php

/**
 * @package    sixphere\websocket
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Sixphere\WebSocket\Protocol;

use Ratchet\RFC6455\Messaging\Frame;

interface ProtocolInterface
{
    public function onStreamData(&$buffer);

    public function upgrade();

    public function send($string, $type = Frame::OP_TEXT);

    public static function getVersion();
}
