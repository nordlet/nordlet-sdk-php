<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationGroupsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $presentationCurrency
     */
    #[JsonProperty('presentationCurrency')]
    public ?string $presentationCurrency;

    /**
     * @param array{
     *   name: string,
     *   presentationCurrency?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->presentationCurrency = $values['presentationCurrency'] ?? null;
    }
}
