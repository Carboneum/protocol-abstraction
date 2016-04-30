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
     * @inheritdoc
     */
    public function getParameter($key)
    {
        if (!array_key_exists($key, $this->parameters)) {
            throw new Exception\ParameterSet\UnknownKeyException($key);
        }

        return $this->parameters[$key];
    }

    /**
     * @inheritdoc
     */
    public function hasParameter($key)
    {
        return array_key_exists($key, $this->parameters);
    }

    /**
     * @inheritdoc
     */
    public function getAllParameters()
    {
        return $this->parameters;
    }
}
