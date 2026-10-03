<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankSettlementsCommissionResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $externalId
     */
    #[JsonProperty('externalId')]
    public string $externalId;

    /**
     * @var string $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var string $fee
     */
    #[JsonProperty('fee')]
    public string $fee;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $sourceId
     */
    #[JsonProperty('sourceId')]
    public ?string $sourceId;

    /**
     * @var ?string $chargeId
     */
    #[JsonProperty('chargeId')]
    public ?string $chargeId;

    /**
     * @var ?string $commissionPercent
     */
    #[JsonProperty('commissionPercent')]
    public ?string $commissionPercent;

    /**
     * @var ?string $commissionAmount
     */
    #[JsonProperty('commissionAmount')]
    public ?string $commissionAmount;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var ?string $matchedInvoiceId
     */
    #[JsonProperty('matchedInvoiceId')]
    public ?string $matchedInvoiceId;

    /**
     * @var value-of<PostV1BankSettlementsCommissionResponseMatchStatus> $matchStatus
     */
    #[JsonProperty('matchStatus')]
    public string $matchStatus;

    /**
     * @param array{
     *   id: string,
     *   externalId: string,
     *   category: string,
     *   date: string,
     *   gross: string,
     *   fee: string,
     *   net: string,
     *   matchStatus: value-of<PostV1BankSettlementsCommissionResponseMatchStatus>,
     *   description?: ?string,
     *   sourceId?: ?string,
     *   chargeId?: ?string,
     *   commissionPercent?: ?string,
     *   commissionAmount?: ?string,
     *   reference?: ?string,
     *   matchedInvoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->externalId = $values['externalId'];
        $this->category = $values['category'];
        $this->date = $values['date'];
        $this->gross = $values['gross'];
        $this->fee = $values['fee'];
        $this->net = $values['net'];
        $this->description = $values['description'] ?? null;
        $this->sourceId = $values['sourceId'] ?? null;
        $this->chargeId = $values['chargeId'] ?? null;
        $this->commissionPercent = $values['commissionPercent'] ?? null;
        $this->commissionAmount = $values['commissionAmount'] ?? null;
        $this->reference = $values['reference'] ?? null;
        $this->matchedInvoiceId = $values['matchedInvoiceId'] ?? null;
        $this->matchStatus = $values['matchStatus'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
