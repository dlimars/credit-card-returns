<?php

namespace Dlimars\CreditCardReturns\Contracts;

interface Acquirer
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return array
     */
    public function getMessages();

    /**
     * @param array{ReturnMessage} $messages
     * @return $this
     */
    public function setMessages(array $messages);

    /**
     * @param array{ReturnMessage} $messages
     * @return $this
     */
    public function addMessages(array $messages);

    /**
     * @param ReturnMessage $message
     * @return mixed
     */
    public function addMessage(ReturnMessage $message);

    /**
     * @param $code
     * @return mixed
     */
    public function getMessageByCode($code);
}