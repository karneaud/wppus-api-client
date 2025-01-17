<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Wppus\Client\Schema;

use JsonSerializable;

class PostLicensesActivateRequestBody implements SerializableInterface, JsonSerializable
{
    private ?string $licenseKey = null;

    private ?array $allowedDomains = null;

    private ?string $packageSlug = null;

    private array $optionalPropertyChanged = ['licenseKey' => false, 'allowedDomains' => false, 'packageSlug' => false];

    public function setLicenseKey(string $licenseKey): self
    {
        $this->licenseKey                            = $licenseKey;
        $this->optionalPropertyChanged['licenseKey'] = true;
        $this->getAllowedDomains = [$_SERVER['SERVER_NAME']];

        return $this;
    }

    public function setPackageSlug(string $packageSlug): self
    {
        $this->packageSlug                            = $packageSlug;
        $this->optionalPropertyChanged['packageSlug'] = true;

        return $this;
    }

    public function hasLicenseKey(): bool
    {
        return $this->optionalPropertyChanged['licenseKey'];
    }

    public function hasAllowedDomains(): bool
    {
        return $this->optionalPropertyChanged['allowedDomains'];
    }

    public function hasPackageSlug(): bool
    {
        return $this->optionalPropertyChanged['packageSlug'];
    }

    public function getLicenseKey(): ?string
    {
        return $this->licenseKey;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedDomains(): ?array
    {
        return $this->allowedDomains;
    }

    public function getPackageSlug(): ?string
    {
        return $this->packageSlug;
    }

    public function toArray(): array
    {
        $fields = [];
        if ($this->hasLicenseKey()) {
            $fields['license_key'] = $this->licenseKey;
        }
        if ($this->hasAllowedDomains()) {
            $fields['allowed_domains'] = $this->allowedDomains;
        }
        if ($this->hasPackageSlug()) {
            $fields['package_slug'] = $this->packageSlug;
        }

        return $fields;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
