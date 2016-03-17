<?php

namespace Dlimars\CreditCardReturns\Acquirers;

use Dlimars\CreditCardReturns\Contracts\Acquirer;
use Dlimars\CreditCardReturns\Contracts\ReturnMessage;
use Dlimars\CreditCardReturns\Message;

abstract class BaseAcquirer implements Acquirer
{
    protected $name;

    protected $messages = [];

    public function __construct(array $messages = [])
    {
        $this->setMessages($messages);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param array {ReturnMessage} $messages
     * @return $this
     */
    public function setMessages(array $messages)
    {
        $this->messages = [];
        $this->addMessages($messages);
    }
    /**
     * @param array {ReturnMessage} $messages
     * @return $this
     */
    public function addMessages(array $messages)
    {
        array_walk($messages, [$this, 'addMessage']);
        return $this;
    }

    /**
     * @param ReturnMessage $message
     * @return mixed
     */
    public function addMessage(ReturnMessage $message)
    {
        if ($message->getCode() && !is_array($message->getCode())) {
            $message->setCode([$message->getCode()]);
        };

        if ($message->getCode()) {
            foreach($message->getCode() as $code){
                $message->setCode($code);
                $this->messages[$code] = clone $message;
            }
        }

        return $this;
    }

    /**
     * @param $code
     * @return ReturnMessage|null
     */
    public function getMessageByCode($code)
    {
        foreach ($this->messages as $message) {
            if (($message->getCode() == $code) || ((int)$code == (int)$message->getCode())) {
                return $message;
            }
        }

        return new Message;
    }
}