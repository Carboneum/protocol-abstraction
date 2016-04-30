<?php

namespace Carboneum\ProtocolAbstraction;

/**
 * Interface ResponseSender
 * @package Carboneum\ProtocolAbstraction
 */
interface ResponseSender
{
    /**
     * @param Response $response
     */
    public function send(Response $response);
}
