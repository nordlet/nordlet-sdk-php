<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StatementsImportBankResponseStatementsItem extends JsonSerializableType
{
    /**
     * @var ?string $statementId
     */
    #[JsonProperty('statementId')]
    public ?string $statementId;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $fromDate;

    /**
     * @var ?DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $toDate;

    /**
     * @var ?string $openingBalance
     */
    #[JsonProperty('openingBalance')]
    public ?string $openingBalance;

    /**
     * @var ?string $closingBalance
     */
    #[JsonProperty('closingBalance')]
    public ?string $closingBalance;

    /**
     * @var int $transactionCount
     */
    #[JsonProperty('transactionCount')]
    public int $transactionCount;

    /**
     * @param array{
     *   transactionCount: int,
     *   statementId?: ?string,
     *   iban?: ?string,
     *   fromDate?: ?DateTime,
     *   toDate?: ?DateTime,
     *   openingBalance?: ?string,
     *   closingBalance?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->statementId = $values['statementId'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->fromDate = $values['fromDate'] ?? null;
        $this->toDate = $values['toDate'] ?? null;
        $this->openingBalance = $values['openingBalance'] ?? null;
        $this->closingBalance = $values['closingBalance'] ?? null;
        $this->transactionCount = $values['transactionCount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
