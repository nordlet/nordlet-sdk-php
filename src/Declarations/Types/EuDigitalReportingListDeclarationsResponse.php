<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuDigitalReportingListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var string $appliesFrom
     */
    #[JsonProperty('appliesFrom')]
    public string $appliesFrom;

    /**
     * @var string $reportTo
     */
    #[JsonProperty('reportTo')]
    public string $reportTo;

    /**
     * @var array<EuDigitalReportingListDeclarationsResponseTransactionsItem> $transactions
     */
    #[JsonProperty('transactions'), ArrayType([EuDigitalReportingListDeclarationsResponseTransactionsItem::class])]
    public array $transactions;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   appliesFrom: string,
     *   reportTo: string,
     *   transactions: array<EuDigitalReportingListDeclarationsResponseTransactionsItem>,
     *   warnings: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->appliesFrom = $values['appliesFrom'];
        $this->reportTo = $values['reportTo'];
        $this->transactions = $values['transactions'];
        $this->warnings = $values['warnings'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
