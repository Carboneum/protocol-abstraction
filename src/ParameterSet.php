<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface ParameterSet
 * @package Carboneum\ProtocolAbstraction
 */
interface ParameterSet
{
    /**
     * @param string $key
     *
     * @throws Exception\ParameterSet\UnknownKeyException
     *
     * @return bool|float|int|string
     */
    public function getParameter($key);

    /**
     * @param string $key
     * @return bool
     */
    public function hasParameter($key);

    /**
     * @return array
     */
    public function getAllParameters();
}
