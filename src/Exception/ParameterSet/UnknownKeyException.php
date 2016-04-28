<?php

namespace Carboneum\ProtocolAbstraction\Exception\ParameterSet;

use Carboneum\ProtocolAbstraction\Exception\ProtocolAbstractionException;

class UnknownKeyException extends ProtocolAbstractionException
{
    const CODE = self::ERROR_CODE_UNKNOWN_PARAMETER_KEY;

    const MESSAGE = 'ProtocolAbstraction: parameter name key {key} is not defined';
    const KEY = 'key';

    /**
     * @param string $key
     * @param \Exception|null $previous
     */
    public function __construct($key, \Exception $previous = null)
    {
        $this->setContextValue(self::KEY, $key);
        parent::__construct($previous);
    }
}
