<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIvazGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var array<string> $waybillIds
     */
    #[JsonProperty('waybillIds'), ArrayType(['string'])]
    public array $waybillIds;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @param array{
     *   waybillIds: array<string>,
     *   persist?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillIds = $values['waybillIds'];
        $this->persist = $values['persist'] ?? null;
    }
}
