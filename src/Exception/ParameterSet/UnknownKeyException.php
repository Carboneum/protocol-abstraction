<?php

namespace Carboneum\ProtocolAbstraction\Exception\ParameterSet;

use Carboneum\ProtocolAbstraction\Exception\ProtocolAbstractionException;

/**
 * Class UnknownKeyException
 * @package Carboneum\ProtocolAbstraction
 */
class UnknownKeyException extends ProtocolAbstractionException
{
    const CODE = self::ERROR_CODE_UNKNOWN_PARAMETER_KEY;

    const MESSAGE = 'ProtocolAbstraction: parameter set key {key} is not defined';
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
