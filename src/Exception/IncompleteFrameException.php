<?php
/**
 * @package    calcinai/bolt
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace Sixphere\WebSocket\Exception;


class IncompleteFrameException extends \UnderflowException {

    private $frame;

    public function __construct($frame){
        $this->frame = $frame;
    }

    public function getFrame(){
        return $this->frame;
    }
}