<?php

namespace SpecShaper\EncryptBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * EncryptEvent.
 */
class EncryptKeyEvent extends Event
{
    /**
     * The key to be used instead of the parameter key.
     *
     * @var string|null
     */
    protected ?string $key = null;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): EncryptKeyEvent
    {
        $this->key = $key;

        return $this;
    }
}
