<?php

namespace Carboneum\ProtocolAbstraction\Generic;

use Carboneum\ProtocolAbstraction;
use Carboneum\ProtocolAbstraction\Exception\ParameterSet;

/**
 * Class Response
 * @package Carboneum\ProtocolAbstraction
 */
class Response implements ProtocolAbstraction\Response
{
    /**
     * @var bool
     */
    protected $success;

    /**
     * @var ProtocolAbstraction\ParameterSet[]
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
     * @var ProtocolAbstraction\ClientCommand[]
     */
    protected $commands;

    /**
     * @param bool $success
     * @param ProtocolAbstraction\ParameterSet[] $parameterSets
     * @param string $defaultSetName
     * @param \Traversable $payloadGenerator
     * @param ProtocolAbstraction\ClientCommand[] $commands
     *
     * @throws ParameterSet\UnknownSetNameException
     */
    public function __construct(
        $success,
        array $parameterSets,
        $defaultSetName,
        \Traversable $payloadGenerator,
        array $commands = []
    ) {
        if (!array_key_exists($defaultSetName, $parameterSets)) {
            throw new ParameterSet\UnknownSetNameException($defaultSetName);
        }

        $this->success = $success;
        $this->parameterSets = $parameterSets;
        $this->defaultSetName = $defaultSetName;
        $this->payloadGenerator = $payloadGenerator;
        $this->commands = $commands;
    }

    /**
     * @inheritdoc
     */
    public function getParameterSet($name)
    {
        if (!array_key_exists($name, $this->parameterSets)) {
            throw new ParameterSet\UnknownSetNameException($name);
        }

        return $this->parameterSets[$name];
    }

    /**
     * @inheritdoc
     */
    public function getDefaultParameterSet()
    {
        return $this->parameterSets[$this->defaultSetName];
    }

    /**
     * @inheritdoc
     */
    public function getPayloadReader()
    {
        return $this->payloadGenerator;
    }

    /**
     * @inheritdoc
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @inheritdoc
     */
    public function getCommands()
    {
        return $this->commands;
    }
}
