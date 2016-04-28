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
     * @return string|bool|int|float
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
