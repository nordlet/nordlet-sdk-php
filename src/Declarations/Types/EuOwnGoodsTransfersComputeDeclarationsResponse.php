<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EuOwnGoodsTransfersComputeDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var int $periodMonth
     */
    #[JsonProperty('periodMonth')]
    public int $periodMonth;

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
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

    /**
     * @var string $memberStateOfIdentification
     */
    #[JsonProperty('memberStateOfIdentification')]
    public string $memberStateOfIdentification;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var array<EuOwnGoodsTransfersComputeDeclarationsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EuOwnGoodsTransfersComputeDeclarationsResponseRowsItem::class])]
    public array $rows;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var array<EuOwnGoodsTransfersComputeDeclarationsResponseTransfersItem> $transfers
     */
    #[JsonProperty('transfers'), ArrayType([EuOwnGoodsTransfersComputeDeclarationsResponseTransfersItem::class])]
    public array $transfers;

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
     *   periodYear: int,
     *   periodMonth: int,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   dueDate: DateTime,
     *   memberStateOfIdentification: string,
     *   currency: string,
     *   rows: array<EuOwnGoodsTransfersComputeDeclarationsResponseRowsItem>,
     *   total: string,
     *   transfers: array<EuOwnGoodsTransfersComputeDeclarationsResponseTransfersItem>,
     *   warnings: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodYear = $values['periodYear'];
        $this->periodMonth = $values['periodMonth'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->dueDate = $values['dueDate'];
        $this->memberStateOfIdentification = $values['memberStateOfIdentification'];
        $this->currency = $values['currency'];
        $this->rows = $values['rows'];
        $this->total = $values['total'];
        $this->transfers = $values['transfers'];
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
