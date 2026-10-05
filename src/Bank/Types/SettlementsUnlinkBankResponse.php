<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class SettlementsUnlinkBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $payoutId
     */
    #[JsonProperty('payoutId')]
    public string $payoutId;

    /**
     * @var ?DateTime $payoutDate
     */
    #[JsonProperty('payoutDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $payoutDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $feeTotal
     */
    #[JsonProperty('feeTotal')]
    public string $feeTotal;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var ?string $fxRate
     */
    #[JsonProperty('fxRate')]
    public ?string $fxRate;

    /**
     * @var value-of<SettlementsUnlinkBankResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $bankTransactionId
     */
    #[JsonProperty('bankTransactionId')]
    public ?string $bankTransactionId;

    /**
     * @var int $lineCount
     */
    #[JsonProperty('lineCount')]
    public int $lineCount;

    /**
     * @var int $matchedCount
     */
    #[JsonProperty('matchedCount')]
    public int $matchedCount;

    /**
     * @var int $unmatchedCount
     */
    #[JsonProperty('unmatchedCount')]
    public int $unmatchedCount;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId: string,
     *   provider: string,
     *   payoutId: string,
     *   currency: string,
     *   grossTotal: string,
     *   feeTotal: string,
     *   netTotal: string,
     *   status: value-of<SettlementsUnlinkBankResponseStatus>,
     *   lineCount: int,
     *   matchedCount: int,
     *   unmatchedCount: int,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   payoutDate?: ?DateTime,
     *   fxRate?: ?string,
     *   journalTransactionId?: ?string,
     *   bankTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->provider = $values['provider'];
        $this->payoutId = $values['payoutId'];
        $this->payoutDate = $values['payoutDate'] ?? null;
        $this->currency = $values['currency'];
        $this->grossTotal = $values['grossTotal'];
        $this->feeTotal = $values['feeTotal'];
        $this->netTotal = $values['netTotal'];
        $this->fxRate = $values['fxRate'] ?? null;
        $this->status = $values['status'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->bankTransactionId = $values['bankTransactionId'] ?? null;
        $this->lineCount = $values['lineCount'];
        $this->matchedCount = $values['matchedCount'];
        $this->unmatchedCount = $values['unmatchedCount'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
