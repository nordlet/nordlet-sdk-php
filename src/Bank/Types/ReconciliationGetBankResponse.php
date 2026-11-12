<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ReconciliationGetBankResponse extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?string $statementBalance
     */
    #[JsonProperty('statementBalance')]
    public ?string $statementBalance;

    /**
     * @var ?value-of<ReconciliationGetBankResponseStatementBalanceSource> $statementBalanceSource
     */
    #[JsonProperty('statementBalanceSource')]
    public ?string $statementBalanceSource;

    /**
     * @var ?DateTime $statementClosingDate
     */
    #[JsonProperty('statementClosingDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $statementClosingDate;

    /**
     * @var string $ledgerBalance
     */
    #[JsonProperty('ledgerBalance')]
    public string $ledgerBalance;

    /**
     * @var ?string $difference
     */
    #[JsonProperty('difference')]
    public ?string $difference;

    /**
     * @var int $unbookedCount
     */
    #[JsonProperty('unbookedCount')]
    public int $unbookedCount;

    /**
     * @var string $unbookedTotal
     */
    #[JsonProperty('unbookedTotal')]
    public string $unbookedTotal;

    /**
     * @var array<ReconciliationGetBankResponseUnbookedLinesItem> $unbookedLines
     */
    #[JsonProperty('unbookedLines'), ArrayType([ReconciliationGetBankResponseUnbookedLinesItem::class])]
    public array $unbookedLines;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   bankAccountId: string,
     *   accountCode: string,
     *   currency: string,
     *   date: DateTime,
     *   ledgerBalance: string,
     *   unbookedCount: int,
     *   unbookedTotal: string,
     *   unbookedLines: array<ReconciliationGetBankResponseUnbookedLinesItem>,
     *   warnings: array<string>,
     *   statementBalance?: ?string,
     *   statementBalanceSource?: ?value-of<ReconciliationGetBankResponseStatementBalanceSource>,
     *   statementClosingDate?: ?DateTime,
     *   difference?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->accountCode = $values['accountCode'];
        $this->currency = $values['currency'];
        $this->date = $values['date'];
        $this->statementBalance = $values['statementBalance'] ?? null;
        $this->statementBalanceSource = $values['statementBalanceSource'] ?? null;
        $this->statementClosingDate = $values['statementClosingDate'] ?? null;
        $this->ledgerBalance = $values['ledgerBalance'];
        $this->difference = $values['difference'] ?? null;
        $this->unbookedCount = $values['unbookedCount'];
        $this->unbookedTotal = $values['unbookedTotal'];
        $this->unbookedLines = $values['unbookedLines'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
