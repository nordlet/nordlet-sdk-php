<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reports\Types\PostV1ReportsVatDetailRequestSide;

class PostV1ReportsVatDetailRequest extends JsonSerializableType
{
    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var ?value-of<PostV1ReportsVatDetailRequestSide> $side
     */
    #[JsonProperty('side')]
    public ?string $side;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   side?: ?value-of<PostV1ReportsVatDetailRequestSide>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->side = $values['side'] ?? null;
    }
}
