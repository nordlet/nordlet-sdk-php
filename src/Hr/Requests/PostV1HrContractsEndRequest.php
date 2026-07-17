<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrContractsEndRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $endDate
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var ?string $endReason
     */
    #[JsonProperty('endReason')]
    public ?string $endReason;

    /**
     * @param array{
     *   id: string,
     *   endDate: string,
     *   endReason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->endDate = $values['endDate'];
        $this->endReason = $values['endReason'] ?? null;
    }
}
