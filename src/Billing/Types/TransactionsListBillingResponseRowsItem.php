<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class TransactionsListBillingResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<TransactionsListBillingResponseRowsItemType> $type
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
     * @var ?DateTime $usageDate
     */
    #[JsonProperty('usageDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $usageDate;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<TransactionsListBillingResponseRowsItemType>,
     *   amountCents: int,
     *   balanceAfterCents: int,
     *   description: string,
     *   createdAt: DateTime,
     *   reference?: ?string,
     *   usageDate?: ?DateTime,
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
