<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsSieRequest extends JsonSerializableType
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
     * @var ?bool $includeTransactions
     */
    #[JsonProperty('includeTransactions')]
    public ?bool $includeTransactions;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   includeTransactions?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->includeTransactions = $values['includeTransactions'] ?? null;
    }
}
