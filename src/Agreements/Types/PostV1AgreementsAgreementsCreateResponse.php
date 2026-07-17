<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AgreementsAgreementsCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $number
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $startDate
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * @var bool $autoRenew
     */
    #[JsonProperty('autoRenew')]
    public bool $autoRenew;

    /**
     * @var ?string $value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var value-of<PostV1AgreementsAgreementsCreateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<PostV1AgreementsAgreementsCreateResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PostV1AgreementsAgreementsCreateResponseItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   number: string,
     *   startDate: string,
     *   autoRenew: bool,
     *   currency: string,
     *   status: value-of<PostV1AgreementsAgreementsCreateResponseStatus>,
     *   createdAt: string,
     *   items: array<PostV1AgreementsAgreementsCreateResponseItemsItem>,
     *   typeId?: ?string,
     *   name?: ?string,
     *   endDate?: ?string,
     *   value?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->typeId = $values['typeId'] ?? null;
        $this->partnerId = $values['partnerId'];
        $this->number = $values['number'];
        $this->name = $values['name'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->autoRenew = $values['autoRenew'];
        $this->value = $values['value'] ?? null;
        $this->currency = $values['currency'];
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->items = $values['items'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
