<?php

namespace Dlimars\CreditCardReturns;

use Dlimars\CreditCardReturns\Contracts\ReturnMessage;

class Message implements ReturnMessage
{
    /**
     * @var string
     */
    private $code;
    /**
     * @var string
     */
    private $message;
    /**
     * @var string
     */
    private $orientation;
    /**
     * @var null
     */
    private $allowRetry;

    /**
     * ReturnMessage constructor.
     * @param string $code
     * @param string $message
     * @param string $orientation
     * @param null $allowRetry
     */
    public function __construct($code = "", $message = "", $orientation = "", $allowRetry = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->orientation = $orientation;
        $this->allowRetry = $allowRetry;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param $orientation
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function allowRetry()
    {
        return (bool) $this->allowRetry;
    }

    /**
     * @param boolean $allowRetry
     * @return $this
     */
    public function setAllowRetry($allowRetry)
    {
        $this->allowRetry = $allowRetry;
        return $this;
    }

}