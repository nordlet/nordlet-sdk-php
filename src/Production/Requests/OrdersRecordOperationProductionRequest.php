<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class OrdersRecordOperationProductionRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $actualMinutes
     */
    #[JsonProperty('actualMinutes')]
    public string $actualMinutes;

    /**
     * @param array{
     *   id: string,
     *   actualMinutes: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->actualMinutes = $values['actualMinutes'];
    }
}
