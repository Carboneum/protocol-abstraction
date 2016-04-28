<?php

namespace Carboneum\ProtocolAbstraction\Generic;

use Carboneum\ProtocolAbstraction;
use Carboneum\ProtocolAbstraction\Exception;

/**
 * Class ParameterSet
 * @package Carboneum\ProtocolAbstraction
 */
class ParameterSet implements ProtocolAbstraction\ParameterSet
{
    /**
     * @var array
     */
    protected $parameters;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $key
     *
     * @throws Exception\ParameterSet\UnknownKeyException
     *
     * @return bool|float|int|string
     */
    public function getParameter($key)
    {
        if (!array_key_exists($key, $this->parameters)) {
            throw new Exception\ParameterSet\UnknownKeyException($key);
        }

        return $this->parameters[$key];
    }

    /**
     * @param string $key
     * @return bool
     */
    public function hasParameter($key)
    {
        return array_key_exists($key, $this->parameters);
    }

    /**
     * @return array
     */
    public function getAllParameters()
    {
        return $this->parameters;
    }
}
