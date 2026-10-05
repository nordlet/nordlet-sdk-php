<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PosSalesReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $reportId
     */
    #[JsonProperty('reportId')]
    public string $reportId;

    /**
     * @var string $reportNumber
     */
    #[JsonProperty('reportNumber')]
    public string $reportNumber;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var string $vat
     */
    #[JsonProperty('vat')]
    public string $vat;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var string $cash
     */
    #[JsonProperty('cash')]
    public string $cash;

    /**
     * @var string $card
     */
    #[JsonProperty('card')]
    public string $card;

    /**
     * @var ?string $cogs
     */
    #[JsonProperty('cogs')]
    public ?string $cogs;

    /**
     * @param array{
     *   reportId: string,
     *   reportNumber: string,
     *   date: DateTime,
     *   net: string,
     *   vat: string,
     *   gross: string,
     *   cash: string,
     *   card: string,
     *   cogs?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reportId = $values['reportId'];
        $this->reportNumber = $values['reportNumber'];
        $this->date = $values['date'];
        $this->net = $values['net'];
        $this->vat = $values['vat'];
        $this->gross = $values['gross'];
        $this->cash = $values['cash'];
        $this->card = $values['card'];
        $this->cogs = $values['cogs'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
