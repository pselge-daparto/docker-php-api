<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Node
{
    /**
     * @var string|null
     */
    protected $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed.
     *
     * @var ObjectVersion|null
     */
    protected $version;
    /**
     * Date and time at which the node was added to the swarm in.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Date and time at which the node was last updated in.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * @var NodeSpec|null
     */
    protected $spec;
    /**
     * NodeDescription encapsulates the properties of the Node as reported by the.
     *
     * @var NodeDescription|null
     */
    protected $description;
    /**
     * NodeStatus represents the status of a node.

     *
     * @var NodeStatus|null
     */
    protected $status;
    /**
     * ManagerStatus represents the status of a manager.

     *
     * @var ManagerStatus|null
     */
    protected $managerStatus;

    public function getID(): ?string
    {
        return $this->iD;
    }

    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed.
    overwrite each other.
     */
    public function getVersion(): ?ObjectVersion
    {
        return $this->version;
    }

    /**
     * The version number of the object such as node, service, etc. This is needed.
    overwrite each other.
     */
    public function setVersion(?ObjectVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Date and time at which the node was added to the swarm in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Date and time at which the node was added to the swarm in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Date and time at which the node was last updated in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Date and time at which the node was last updated in.
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getSpec(): ?NodeSpec
    {
        return $this->spec;
    }

    public function setSpec(?NodeSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * NodeDescription encapsulates the properties of the Node as reported by the.
    agent.
     */
    public function getDescription(): ?NodeDescription
    {
        return $this->description;
    }

    /**
     * NodeDescription encapsulates the properties of the Node as reported by the.
    agent.
     */
    public function setDescription(?NodeDescription $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * NodeStatus represents the status of a node.

    It provides the current status of the node, as seen by the manager.
     */
    public function getStatus(): ?NodeStatus
    {
        return $this->status;
    }

    /**
     * NodeStatus represents the status of a node.

    It provides the current status of the node, as seen by the manager.
     */
    public function setStatus(?NodeStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * ManagerStatus represents the status of a manager.

    is a manager.
     */
    public function getManagerStatus(): ?ManagerStatus
    {
        return $this->managerStatus;
    }

    /**
     * ManagerStatus represents the status of a manager.

    is a manager.
     */
    public function setManagerStatus(?ManagerStatus $managerStatus): self
    {
        $this->managerStatus = $managerStatus;

        return $this;
    }
}
