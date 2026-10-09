<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ShiftsOpenPosRequest extends JsonSerializableType
{
    /**
     * @var string $deviceId
     */
    #[JsonProperty('deviceId')]
    public string $deviceId;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $openingCash
     */
    #[JsonProperty('openingCash')]
    public ?string $openingCash;

    /**
     * @param array{
     *   deviceId: string,
     *   warehouseId?: ?string,
     *   openingCash?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deviceId = $values['deviceId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->openingCash = $values['openingCash'] ?? null;
    }
}
