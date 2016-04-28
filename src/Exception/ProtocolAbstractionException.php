<?php

namespace Carboneum\ProtocolAbstraction\Exception;

use Carboneum\ContextualException\Exception;

class ProtocolAbstractionException extends Exception
{
    const CODE_PACKAGE_PREFIX = 104000;

    const ERROR_CODE_UNKNOWN_PARAMETER_SET_NAME = 1;
    const ERROR_CODE_UNKNOWN_PARAMETER_KEY = 2;

    const MESSAGE = 'ProtocolAbstraction exception. Context: {exception_contexts}';
}
