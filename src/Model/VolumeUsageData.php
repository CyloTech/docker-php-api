<?php

declare(strict_types=1);

namespace Docker\API\Model;

class VolumeUsageData extends \ArrayObject
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
     * Amount of disk space used by the volume (in bytes). This information
     * is only available for volumes created with the `"local"` volume
     * driver. For volumes created with other volume drivers, this field
     * is set to `-1` ("not available").
     *
     * @var int|null
     */
    protected $size;
    /**
     * The number of containers referencing this volume. This field
     * is set to `-1` if the reference-count is not available.
     *
     * @var int|null
     */
    protected $refCount;

    /**
     * Amount of disk space used by the volume (in bytes). This information
     * is only available for volumes created with the `"local"` volume
     * driver. For volumes created with other volume drivers, this field
     * is set to `-1` ("not available").
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * Amount of disk space used by the volume (in bytes). This information
     * is only available for volumes created with the `"local"` volume
     * driver. For volumes created with other volume drivers, this field
     * is set to `-1` ("not available").
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    /**
     * The number of containers referencing this volume. This field
     * is set to `-1` if the reference-count is not available.
     */
    public function getRefCount(): ?int
    {
        return $this->refCount;
    }

    /**
     * The number of containers referencing this volume. This field
     * is set to `-1` if the reference-count is not available.
     */
    public function setRefCount(?int $refCount): self
    {
        $this->initialized['refCount'] = true;
        $this->refCount = $refCount;

        return $this;
    }
}
