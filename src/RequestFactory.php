<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface RequestFactory
 * @package Carboneum\ProtocolAbstraction
 */
interface RequestFactory
{
    /**
     * @return Request
     */
    public function createRequest();
}
