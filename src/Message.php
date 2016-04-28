<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface Message
 * @package Carboneum\ProtocolAbstraction
 */
interface Message
{
    /**
     * @param string $name
     * @return ParameterSet
     */
    public function getParameterSet($name);

    /**
     * @return ParameterSet
     */
    public function getDefaultParameterSet();

    /**
     * @return \Traversable
     */
    public function getPayloadReader();
}
