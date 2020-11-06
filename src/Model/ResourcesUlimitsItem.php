<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ResourcesUlimitsItem
{
    /**
     * Name of ulimit.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Soft limit.
     *
     * @var int|null
     */
    protected $soft;
    /**
     * Hard limit.
     *
     * @var int|null
     */
    protected $hard;

    /**
     * Name of ulimit.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of ulimit.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Soft limit.
     */
    public function getSoft(): ?int
    {
        return $this->soft;
    }

    /**
     * Soft limit.
     */
    public function setSoft(?int $soft): self
    {
        $this->soft = $soft;

        return $this;
    }

    /**
     * Hard limit.
     */
    public function getHard(): ?int
    {
        return $this->hard;
    }

    /**
     * Hard limit.
     */
    public function setHard(?int $hard): self
    {
        $this->hard = $hard;

        return $this;
    }
}
