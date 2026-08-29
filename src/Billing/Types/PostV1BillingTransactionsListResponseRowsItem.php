<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingTransactionsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1BillingTransactionsListResponseRowsItemType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var int $balanceAfterCents
     */
    #[JsonProperty('balanceAfterCents')]
    public int $balanceAfterCents;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var ?string $usageDate
     */
    #[JsonProperty('usageDate')]
    public ?string $usageDate;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1BillingTransactionsListResponseRowsItemType>,
     *   amountCents: int,
     *   balanceAfterCents: int,
     *   description: string,
     *   createdAt: string,
     *   reference?: ?string,
     *   usageDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->amountCents = $values['amountCents'];
        $this->balanceAfterCents = $values['balanceAfterCents'];
        $this->description = $values['description'];
        $this->reference = $values['reference'] ?? null;
        $this->usageDate = $values['usageDate'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
