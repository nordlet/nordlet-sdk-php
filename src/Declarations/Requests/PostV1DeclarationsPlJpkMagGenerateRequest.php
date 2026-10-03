<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkMagGenerateRequest extends JsonSerializableType
{
    /**
     * @var string $dateFrom
     */
    #[JsonProperty('dateFrom')]
    public string $dateFrom;

    /**
     * @var string $dateTo
     */
    #[JsonProperty('dateTo')]
    public string $dateTo;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @param array{
     *   dateFrom: string,
     *   dateTo: string,
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dateFrom = $values['dateFrom'];
        $this->dateTo = $values['dateTo'];
        $this->warehouseId = $values['warehouseId'] ?? null;
    }
}
