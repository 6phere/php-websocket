<?php
/**
 * @package    sixphere\websocket
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Sixphere\WebSocket\Protocol;

/**
 * This is a compatibility class for legacy naming of the protocol pre-RFC
 *
 * Class HiBi10
 * @package Sixphere\WebSocket\Protocol
 */
class HiBi10 extends RFC6455 {

    public static function getVersion() {
        return 8;
    }

}