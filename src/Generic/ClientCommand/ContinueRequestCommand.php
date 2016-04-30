<?php

namespace Carboneum\ProtocolAbstraction\Generic\ClientCommand;

use Carboneum\ProtocolAbstraction\ClientCommand;
use Carboneum\ProtocolAbstraction\Request;

/**
 * Class ContinueRequestCommand
 * @package Carboneum\ProtocolAbstraction
 */
class ContinueRequestCommand implements ClientCommand
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var bool
     */
    protected $permanent;

    /**
     * @param Request $request
     * @param bool $permanent
     */
    public function __construct(Request $request, $permanent = false)
    {
        $this->request = $request;
        $this->permanent = $permanent;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return boolean
     */
    public function isPermanent()
    {
        return $this->permanent;
    }
}
