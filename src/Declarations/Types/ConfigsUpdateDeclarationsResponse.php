<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ConfigsUpdateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var array<ConfigsUpdateDeclarationsResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([ConfigsUpdateDeclarationsResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var ?array<ConfigsUpdateDeclarationsResponseEndpointsItem> $endpoints
     */
    #[JsonProperty('endpoints'), ArrayType([ConfigsUpdateDeclarationsResponseEndpointsItem::class])]
    public ?array $endpoints;

    /**
     * @var array<string, string> $values
     */
    #[JsonProperty('values'), ArrayType(['string' => 'string'])]
    public array $values;

    /**
     * @var bool $acceptsCertificate
     */
    #[JsonProperty('acceptsCertificate')]
    public bool $acceptsCertificate;

    /**
     * @param array{
     *   system: string,
     *   country: string,
     *   title: string,
     *   fields: array<ConfigsUpdateDeclarationsResponseFieldsItem>,
     *   values: array<string, string>,
     *   acceptsCertificate: bool,
     *   endpoints?: ?array<ConfigsUpdateDeclarationsResponseEndpointsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->system = $values['system'];
        $this->country = $values['country'];
        $this->title = $values['title'];
        $this->fields = $values['fields'];
        $this->endpoints = $values['endpoints'] ?? null;
        $this->values = $values['values'];
        $this->acceptsCertificate = $values['acceptsCertificate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
