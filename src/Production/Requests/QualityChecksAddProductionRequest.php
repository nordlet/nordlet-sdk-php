<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class QualityChecksAddProductionRequest extends JsonSerializableType
{
    /**
     * @var string $orderId
     */
    #[JsonProperty('orderId')]
    public string $orderId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   orderId: string,
     *   name: string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderId = $values['orderId'];
        $this->name = $values['name'];
        $this->notes = $values['notes'] ?? null;
    }
}
