<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsDatevRequest extends JsonSerializableType
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
     * @var ?string $consultantNumber
     */
    #[JsonProperty('consultantNumber')]
    public ?string $consultantNumber;

    /**
     * @var ?string $clientNumber
     */
    #[JsonProperty('clientNumber')]
    public ?string $clientNumber;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   consultantNumber?: ?string,
     *   clientNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->consultantNumber = $values['consultantNumber'] ?? null;
        $this->clientNumber = $values['clientNumber'] ?? null;
    }
}
