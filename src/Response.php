<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface Response
 * @package Carboneum\ProtocolAbstraction
 */
interface Response extends Message
{
    /**
     * @return bool
     */
    public function isSuccess();

    /**
     * @return ClientCommand[]
     */
    public function getCommands();
}
