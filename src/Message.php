<?php

namespace Carboneum\ProtocolAbstraction;

use Carboneum\ProtocolAbstraction;
use Carboneum\ProtocolAbstraction\Exception\ParameterSet;

/**
 * Interface Message
 * @package Carboneum\ProtocolAbstraction
 */
interface Message
{
    /**
     * @param string $name
     *
     * @throws ParameterSet\UnknownSetNameException
     *
     * @return ProtocolAbstraction\ParameterSet
     */
    public function getParameterSet($name);

    /**
     * @return ProtocolAbstraction\ParameterSet
     */
    public function getDefaultParameterSet();

    /**
     * @return \Traversable
     */
    public function getPayloadReader();
}
