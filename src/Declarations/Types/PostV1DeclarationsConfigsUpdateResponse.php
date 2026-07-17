<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsConfigsUpdateResponse extends JsonSerializableType
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
     * @var array<PostV1DeclarationsConfigsUpdateResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1DeclarationsConfigsUpdateResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var ?array<PostV1DeclarationsConfigsUpdateResponseEndpointsItem> $endpoints
     */
    #[JsonProperty('endpoints'), ArrayType([PostV1DeclarationsConfigsUpdateResponseEndpointsItem::class])]
    public ?array $endpoints;

    /**
     * @var array<string, string> $values
     */
    #[JsonProperty('values'), ArrayType(['string' => 'string'])]
    public array $values;

    /**
     * @param array{
     *   system: string,
     *   country: string,
     *   title: string,
     *   fields: array<PostV1DeclarationsConfigsUpdateResponseFieldsItem>,
     *   values: array<string, string>,
     *   endpoints?: ?array<PostV1DeclarationsConfigsUpdateResponseEndpointsItem>,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
