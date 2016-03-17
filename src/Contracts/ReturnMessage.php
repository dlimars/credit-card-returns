<?php

namespace Dlimars\CreditCardReturns\Contracts;


interface ReturnMessage
{
    /**
     * ReturnMessage constructor.
     * @param string $code
     * @param string $message
     * @param string $orientation
     * @param null $allowRetry
     */
    public function __construct($code = "", $message = "", $orientation = "", $allowRetry = null);

    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * @return string
     */
    public function getOrientation();

    /**
     * @param $orientation
     * @return $this
     */
    public function setOrientation($orientation);

    /**
     * @return boolean
     */
    public function allowRetry();

    /**
     * @param boolean $allowRetry
     * @return $this
     */
    public function setAllowRetry($allowRetry);
}