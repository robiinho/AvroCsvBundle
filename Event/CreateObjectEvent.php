<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Avro\CsvBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * @author Steffen Roßkamp <steffen.rosskamp@gimmickmedia.de>
 */
class CreateObjectEvent extends Event
{
    protected $object;
    protected string $class;

    /**
     * @psalm-param class-string $class
     */
    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function setObject(?object $object): void
    {
        $this->object = $object;
    }

    /**
     * Get the doctrine object if set.
     */
    public function getObject(): ?object
    {
        return $this->object;
    }

    /**
     * @return string
     * @psalm-return class-string
     */
    public function getClass(): string
    {
        return $this->class;
    }
}
