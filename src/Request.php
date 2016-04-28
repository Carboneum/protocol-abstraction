<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface Request
 * @package Carboneum\ProtocolAbstraction
 */
interface Request extends Message
{
    /**
     * @return string
     */
    public function getTarget();
}
