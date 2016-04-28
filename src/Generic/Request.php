<?php

namespace Carboneum\ProtocolAbstraction\Generic;

use Carboneum\ProtocolAbstraction;
use Carboneum\ProtocolAbstraction\Exception\ParameterSet;

/**
 * Class Request
 * @package Carboneum\ProtocolAbstraction
 */
class Request implements ProtocolAbstraction\Request
{
    /**
     * @var string
     */
    protected $target;

    /**
     * @var \Carboneum\ProtocolAbstraction\ParameterSet[]
     */
    protected $parameterSets;

    /**
     * @var string
     */
    protected $defaultSetName;

    /**
     * @var \Traversable
     */
    protected $payloadGenerator;

    /**
     * @param string $target
     * @param \Carboneum\ProtocolAbstraction\Generic\ParameterSet[] $parameterSets
     * @param string $defaultSetName
     * @param \Traversable $payloadGenerator
     *
     * @throws ParameterSet\UnknownSetNameException
     */
    public function __construct($target, array $parameterSets, $defaultSetName, \Traversable $payloadGenerator)
    {
        if (!array_key_exists($defaultSetName, $parameterSets)) {
            throw new ParameterSet\UnknownSetNameException($defaultSetName);
        }

        $this->target = $target;
        $this->parameterSets = $parameterSets;
        $this->defaultSetName = $defaultSetName;
        $this->payloadGenerator = $payloadGenerator;
    }

    /**
     * @param string $name
     *
     * @throws ParameterSet\UnknownSetNameException
     *
     * @return ProtocolAbstraction\ParameterSet
     */
    public function getParameterSet($name)
    {
        if (!array_key_exists($name, $this->parameterSets)) {
            throw new ParameterSet\UnknownSetNameException($name);
        }

        return $this->parameterSets[$name];
    }

    /**
     * @return \Carboneum\ProtocolAbstraction\ParameterSet
     */
    public function getDefaultParameterSet()
    {
        return $this->parameterSets[$this->defaultSetName];
    }

    /**
     * @return \Traversable
     */
    public function getPayloadReader()
    {
        return $this->payloadGenerator;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
}
