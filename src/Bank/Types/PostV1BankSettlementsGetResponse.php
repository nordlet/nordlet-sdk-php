<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BankSettlementsGetResponse extends JsonSerializableType
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
     * @var ?string $payoutDate
     */
    #[JsonProperty('payoutDate')]
    public ?string $payoutDate;

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
     * @var value-of<PostV1BankSettlementsGetResponseStatus> $status
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1BankSettlementsGetResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1BankSettlementsGetResponseLinesItem::class])]
    public array $lines;

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
     *   status: value-of<PostV1BankSettlementsGetResponseStatus>,
     *   lineCount: int,
     *   matchedCount: int,
     *   unmatchedCount: int,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1BankSettlementsGetResponseLinesItem>,
     *   payoutDate?: ?string,
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
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
