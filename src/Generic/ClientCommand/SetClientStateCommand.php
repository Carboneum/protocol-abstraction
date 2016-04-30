<?php

namespace Carboneum\ProtocolAbstraction\Generic\ClientCommand;

use Carboneum\ProtocolAbstraction\ClientCommand;

/**
 * Class SetClientStateCommand
 * @package Carboneum\ProtocolAbstraction
 */
class SetClientStateCommand implements ClientCommand
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var \DateTimeInterface|null
     */
    protected $expireAt;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @param string $name
     * @param string $value
     * @param \DateTimeInterface|null $expireAt
     * @param string $namespace
     */
    public function __construct($name, $value, \DateTimeInterface $expireAt = null, $namespace = '.')
    {
        $this->name = $name;
        $this->value = $value;
        $this->expireAt = $expireAt;
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
}
