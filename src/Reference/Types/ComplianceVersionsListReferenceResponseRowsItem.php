<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ComplianceVersionsListReferenceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var string $artifact
     */
    #[JsonProperty('artifact')]
    public string $artifact;

    /**
     * @var string $version
     */
    #[JsonProperty('version')]
    public string $version;

    /**
     * @var string $verifiedOn
     */
    #[JsonProperty('verifiedOn')]
    public string $verifiedOn;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?string $resource
     */
    #[JsonProperty('resource')]
    public ?string $resource;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   country: string,
     *   system: string,
     *   artifact: string,
     *   version: string,
     *   verifiedOn: string,
     *   source: string,
     *   resource?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->country = $values['country'];
        $this->system = $values['system'];
        $this->artifact = $values['artifact'];
        $this->version = $values['version'];
        $this->verifiedOn = $values['verifiedOn'];
        $this->source = $values['source'];
        $this->resource = $values['resource'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
