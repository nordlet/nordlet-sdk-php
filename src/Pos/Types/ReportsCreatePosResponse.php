<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ReportsCreatePosResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?string $deviceId
     */
    #[JsonProperty('deviceId')]
    public ?string $deviceId;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public string $vatTotal;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $cashAmount
     */
    #[JsonProperty('cashAmount')]
    public string $cashAmount;

    /**
     * @var string $cardAmount
     */
    #[JsonProperty('cardAmount')]
    public string $cardAmount;

    /**
     * @var ?string $cogsTotal
     */
    #[JsonProperty('cogsTotal')]
    public ?string $cogsTotal;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<ReportsCreatePosResponseVatLinesItem> $vatLines
     */
    #[JsonProperty('vatLines'), ArrayType([ReportsCreatePosResponseVatLinesItem::class])]
    public array $vatLines;

    /**
     * @param array{
     *   id: string,
     *   reportNumber: string,
     *   date: DateTime,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   cashAmount: string,
     *   cardAmount: string,
     *   createdAt: DateTime,
     *   vatLines: array<ReportsCreatePosResponseVatLinesItem>,
     *   deviceId?: ?string,
     *   warehouseId?: ?string,
     *   cogsTotal?: ?string,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->reportNumber = $values['reportNumber'];
        $this->date = $values['date'];
        $this->deviceId = $values['deviceId'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->cashAmount = $values['cashAmount'];
        $this->cardAmount = $values['cardAmount'];
        $this->cogsTotal = $values['cogsTotal'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->vatLines = $values['vatLines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
