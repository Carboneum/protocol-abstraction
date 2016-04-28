<?php

namespace Carboneum\ProtocolAbstraction\Exception\ParameterSet;

use Carboneum\ProtocolAbstraction\Exception\ProtocolAbstractionException;

class UnknownSetNameException extends ProtocolAbstractionException
{
    const CODE = self::ERROR_CODE_UNKNOWN_PARAMETER_SET_NAME;

    const MESSAGE = 'ProtocolAbstraction: parameter set with name {set_name} is not defined';
    const SET_NAME = 'set_name';

    /**
     * @param string $name
     * @param \Exception|null $previous
     */
    public function __construct($name, \Exception $previous = null)
    {
        $this->setContextValue(self::SET_NAME, $name);
        parent::__construct($previous);
    }
}
