<?php
/*
 * This file is part of the codeliner/shared-domain-set package.
 * (c) Alexander Miertsch <kontakt@codeliner.ws>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Codeliner\Domain\Shared;

use Rhumsaa\Uuid\Uuid;

/**
 * Interface DomainEventInterface
 * 
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
interface DomainEventInterface
{
    /**
     * @return Uuid
     */
    public function uuid();

    /**
     * @return int
     */
    public function version();

    /**
     * @return \DateTime
     */
    public function occurredOn();

    /**
     * @return array
     */
    public function payload();
}
