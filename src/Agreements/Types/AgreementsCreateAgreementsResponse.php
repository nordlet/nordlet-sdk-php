<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class AgreementsCreateAgreementsResponse extends JsonSerializableType
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
     * @var value-of<AgreementsCreateAgreementsResponseKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @var ?string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public ?string $bankAccountId;

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
     * @var DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public DateTime $startDate;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

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
     * @var ?value-of<AgreementsCreateAgreementsResponseBillingPeriod> $billingPeriod
     */
    #[JsonProperty('billingPeriod')]
    public ?string $billingPeriod;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var value-of<AgreementsCreateAgreementsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<AgreementsCreateAgreementsResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([AgreementsCreateAgreementsResponseItemsItem::class])]
    public array $items;

    /**
     * @param array{
     *   id: string,
     *   kind: value-of<AgreementsCreateAgreementsResponseKind>,
     *   number: string,
     *   startDate: DateTime,
     *   autoRenew: bool,
     *   currency: string,
     *   status: value-of<AgreementsCreateAgreementsResponseStatus>,
     *   createdAt: DateTime,
     *   items: array<AgreementsCreateAgreementsResponseItemsItem>,
     *   typeId?: ?string,
     *   partnerId?: ?string,
     *   employeeId?: ?string,
     *   bankAccountId?: ?string,
     *   name?: ?string,
     *   endDate?: ?DateTime,
     *   value?: ?string,
     *   billingPeriod?: ?value-of<AgreementsCreateAgreementsResponseBillingPeriod>,
     *   notes?: ?string,
     *   documentRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->typeId = $values['typeId'] ?? null;
        $this->kind = $values['kind'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->employeeId = $values['employeeId'] ?? null;
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->number = $values['number'];
        $this->name = $values['name'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->autoRenew = $values['autoRenew'];
        $this->value = $values['value'] ?? null;
        $this->billingPeriod = $values['billingPeriod'] ?? null;
        $this->currency = $values['currency'];
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
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
