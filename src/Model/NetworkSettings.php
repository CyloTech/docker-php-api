<?php

declare(strict_types=1);

namespace Docker\API\Model;

class NetworkSettings extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the network'a bridge (for example, `docker0`).
     *
     * @var string|null
     */
    protected $bridge;
    /**
     * SandboxID uniquely represents a container's network stack.
     *
     * @var string|null
     */
    protected $sandboxID;
    /**
     * Indicates if hairpin NAT should be enabled on the virtual interface.
     *
     * @var bool|null
     */
    protected $hairpinMode;
    /**
     * IPv6 unicast address using the link-local prefix.
     *
     * @var string|null
     */
    protected $linkLocalIPv6Address;
    /**
     * Prefix length of the IPv6 unicast address.
     *
     * @var int|null
     */
    protected $linkLocalIPv6PrefixLen;
    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @var PortBinding[][]|null
     */
    protected $ports;
    /**
     * SandboxKey identifies the sandbox.
     *
     * @var string|null
     */
    protected $sandboxKey;
    /**
     * @var Address[]|null
     */
    protected $secondaryIPAddresses;
    /**
     * @var Address[]|null
     */
    protected $secondaryIPv6Addresses;
    /**
     * EndpointID uniquely represents a service endpoint in a Sandbox.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $endpointID;
    /**
     * Gateway address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $gateway;
    /**
     * Global IPv6 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var int|null
     */
    protected $globalIPv6PrefixLen;
    /**
     * IPv4 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $iPAddress;
    /**
     * Mask length of the IPv4 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var int|null
     */
    protected $iPPrefixLen;
    /**
     * IPv6 gateway address for this network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $iPv6Gateway;
    /**
     * MAC address for the container on the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     *
     * @var string|null
     */
    protected $macAddress;
    /**
     * Information about all networks that the container is connected to.
     *
     * @var EndpointSettings[]|null
     */
    protected $networks;

    /**
     * Name of the network'a bridge (for example, `docker0`).
     */
    public function getBridge(): ?string
    {
        return $this->bridge;
    }

    /**
     * Name of the network'a bridge (for example, `docker0`).
     */
    public function setBridge(?string $bridge): self
    {
        $this->initialized['bridge'] = true;
        $this->bridge = $bridge;

        return $this;
    }

    /**
     * SandboxID uniquely represents a container's network stack.
     */
    public function getSandboxID(): ?string
    {
        return $this->sandboxID;
    }

    /**
     * SandboxID uniquely represents a container's network stack.
     */
    public function setSandboxID(?string $sandboxID): self
    {
        $this->initialized['sandboxID'] = true;
        $this->sandboxID = $sandboxID;

        return $this;
    }

    /**
     * Indicates if hairpin NAT should be enabled on the virtual interface.
     */
    public function getHairpinMode(): ?bool
    {
        return $this->hairpinMode;
    }

    /**
     * Indicates if hairpin NAT should be enabled on the virtual interface.
     */
    public function setHairpinMode(?bool $hairpinMode): self
    {
        $this->initialized['hairpinMode'] = true;
        $this->hairpinMode = $hairpinMode;

        return $this;
    }

    /**
     * IPv6 unicast address using the link-local prefix.
     */
    public function getLinkLocalIPv6Address(): ?string
    {
        return $this->linkLocalIPv6Address;
    }

    /**
     * IPv6 unicast address using the link-local prefix.
     */
    public function setLinkLocalIPv6Address(?string $linkLocalIPv6Address): self
    {
        $this->initialized['linkLocalIPv6Address'] = true;
        $this->linkLocalIPv6Address = $linkLocalIPv6Address;

        return $this;
    }

    /**
     * Prefix length of the IPv6 unicast address.
     */
    public function getLinkLocalIPv6PrefixLen(): ?int
    {
        return $this->linkLocalIPv6PrefixLen;
    }

    /**
     * Prefix length of the IPv6 unicast address.
     */
    public function setLinkLocalIPv6PrefixLen(?int $linkLocalIPv6PrefixLen): self
    {
        $this->initialized['linkLocalIPv6PrefixLen'] = true;
        $this->linkLocalIPv6PrefixLen = $linkLocalIPv6PrefixLen;

        return $this;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @return PortBinding[][]|null
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * PortMap describes the mapping of container ports to host ports, using the
     * container's port-number and protocol as key in the format `<port>/<protocol>`,
     * for example, `80/udp`.
     *
     * If a container's port is mapped for multiple protocols, separate entries
     * are added to the mapping table.
     *
     * @param PortBinding[][]|null $ports
     */
    public function setPorts(?iterable $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;

        return $this;
    }

    /**
     * SandboxKey identifies the sandbox.
     */
    public function getSandboxKey(): ?string
    {
        return $this->sandboxKey;
    }

    /**
     * SandboxKey identifies the sandbox.
     */
    public function setSandboxKey(?string $sandboxKey): self
    {
        $this->initialized['sandboxKey'] = true;
        $this->sandboxKey = $sandboxKey;

        return $this;
    }

    /**
     * @return Address[]|null
     */
    public function getSecondaryIPAddresses(): ?array
    {
        return $this->secondaryIPAddresses;
    }

    /**
     * @param Address[]|null $secondaryIPAddresses
     */
    public function setSecondaryIPAddresses(?array $secondaryIPAddresses): self
    {
        $this->initialized['secondaryIPAddresses'] = true;
        $this->secondaryIPAddresses = $secondaryIPAddresses;

        return $this;
    }

    /**
     * @return Address[]|null
     */
    public function getSecondaryIPv6Addresses(): ?array
    {
        return $this->secondaryIPv6Addresses;
    }

    /**
     * @param Address[]|null $secondaryIPv6Addresses
     */
    public function setSecondaryIPv6Addresses(?array $secondaryIPv6Addresses): self
    {
        $this->initialized['secondaryIPv6Addresses'] = true;
        $this->secondaryIPv6Addresses = $secondaryIPv6Addresses;

        return $this;
    }

    /**
     * EndpointID uniquely represents a service endpoint in a Sandbox.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getEndpointID(): ?string
    {
        return $this->endpointID;
    }

    /**
     * EndpointID uniquely represents a service endpoint in a Sandbox.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setEndpointID(?string $endpointID): self
    {
        $this->initialized['endpointID'] = true;
        $this->endpointID = $endpointID;

        return $this;
    }

    /**
     * Gateway address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * Gateway address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setGateway(?string $gateway): self
    {
        $this->initialized['gateway'] = true;
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * Global IPv6 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getGlobalIPv6Address(): ?string
    {
        return $this->globalIPv6Address;
    }

    /**
     * Global IPv6 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setGlobalIPv6Address(?string $globalIPv6Address): self
    {
        $this->initialized['globalIPv6Address'] = true;
        $this->globalIPv6Address = $globalIPv6Address;

        return $this;
    }

    /**
     * Mask length of the global IPv6 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getGlobalIPv6PrefixLen(): ?int
    {
        return $this->globalIPv6PrefixLen;
    }

    /**
     * Mask length of the global IPv6 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setGlobalIPv6PrefixLen(?int $globalIPv6PrefixLen): self
    {
        $this->initialized['globalIPv6PrefixLen'] = true;
        $this->globalIPv6PrefixLen = $globalIPv6PrefixLen;

        return $this;
    }

    /**
     * IPv4 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getIPAddress(): ?string
    {
        return $this->iPAddress;
    }

    /**
     * IPv4 address for the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setIPAddress(?string $iPAddress): self
    {
        $this->initialized['iPAddress'] = true;
        $this->iPAddress = $iPAddress;

        return $this;
    }

    /**
     * Mask length of the IPv4 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getIPPrefixLen(): ?int
    {
        return $this->iPPrefixLen;
    }

    /**
     * Mask length of the IPv4 address.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setIPPrefixLen(?int $iPPrefixLen): self
    {
        $this->initialized['iPPrefixLen'] = true;
        $this->iPPrefixLen = $iPPrefixLen;

        return $this;
    }

    /**
     * IPv6 gateway address for this network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getIPv6Gateway(): ?string
    {
        return $this->iPv6Gateway;
    }

    /**
     * IPv6 gateway address for this network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setIPv6Gateway(?string $iPv6Gateway): self
    {
        $this->initialized['iPv6Gateway'] = true;
        $this->iPv6Gateway = $iPv6Gateway;

        return $this;
    }

    /**
     * MAC address for the container on the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    /**
     * MAC address for the container on the default "bridge" network.
     *
     * <p><br /></p>
     *
     * > **Deprecated**: This field is only propagated when attached to the
     * > default "bridge" network. Use the information from the "bridge"
     * > network inside the `Networks` map instead, which contains the same
     * > information. This field was deprecated in Docker 1.9 and is scheduled
     * > to be removed in Docker 17.12.0
     */
    public function setMacAddress(?string $macAddress): self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;

        return $this;
    }

    /**
     * Information about all networks that the container is connected to.
     *
     * @return EndpointSettings[]|null
     */
    public function getNetworks(): ?iterable
    {
        return $this->networks;
    }

    /**
     * Information about all networks that the container is connected to.
     *
     * @param EndpointSettings[]|null $networks
     */
    public function setNetworks(?iterable $networks): self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;

        return $this;
    }
}
