<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationGroupsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $presentationCurrency
     */
    #[JsonProperty('presentationCurrency')]
    public ?string $presentationCurrency;

    /**
     * @param array{
     *   groupId: string,
     *   name?: ?string,
     *   presentationCurrency?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->name = $values['name'] ?? null;
        $this->presentationCurrency = $values['presentationCurrency'] ?? null;
    }
}
