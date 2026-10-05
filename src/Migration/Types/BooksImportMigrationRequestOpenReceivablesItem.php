<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BooksImportMigrationRequestOpenReceivablesItem extends JsonSerializableType
{
    /**
     * @var string $partnerCode
     */
    #[JsonProperty('partnerCode')]
    public string $partnerCode;

    /**
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var ?string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public ?string $vatTotal;

    /**
     * @var ?string $outstanding
     */
    #[JsonProperty('outstanding')]
    public ?string $outstanding;

    /**
     * @var ?string $fxRate
     */
    #[JsonProperty('fxRate')]
    public ?string $fxRate;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $number
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @param array{
     *   partnerCode: string,
     *   grossTotal: string,
     *   number: string,
     *   issueDate: DateTime,
     *   dueDate?: ?DateTime,
     *   currency?: ?string,
     *   vatTotal?: ?string,
     *   outstanding?: ?string,
     *   fxRate?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerCode = $values['partnerCode'];
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->grossTotal = $values['grossTotal'];
        $this->vatTotal = $values['vatTotal'] ?? null;
        $this->outstanding = $values['outstanding'] ?? null;
        $this->fxRate = $values['fxRate'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->number = $values['number'];
        $this->issueDate = $values['issueDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
