<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * @var EndpointSettings[]|null
     */
    protected $networks;

    /**
     * @return EndpointSettings[]|null
     */
    public function getNetworks(): ?iterable
    {
        return $this->networks;
    }

    /**
     * @param EndpointSettings[]|null $networks
     */
    public function setNetworks(?iterable $networks): self
    {
        $this->networks = $networks;

        return $this;
    }
}
