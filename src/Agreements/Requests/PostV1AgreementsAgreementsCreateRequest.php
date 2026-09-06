<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsCreateRequestKind;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsCreateRequestBillingPeriod;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsCreateRequestStatus;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsCreateRequestItemsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1AgreementsAgreementsCreateRequest extends JsonSerializableType
{
    /**
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var ?value-of<PostV1AgreementsAgreementsCreateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

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
     * @var ?bool $autoRenew
     */
    #[JsonProperty('autoRenew')]
    public ?bool $autoRenew;

    /**
     * @var ?string $value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var ?value-of<PostV1AgreementsAgreementsCreateRequestBillingPeriod> $billingPeriod
     */
    #[JsonProperty('billingPeriod')]
    public ?string $billingPeriod;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?value-of<PostV1AgreementsAgreementsCreateRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

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
     * @var ?array<PostV1AgreementsAgreementsCreateRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([PostV1AgreementsAgreementsCreateRequestItemsItem::class])]
    public ?array $items;

    /**
     * @param array{
     *   number: string,
     *   startDate: string,
     *   typeId?: ?string,
     *   kind?: ?value-of<PostV1AgreementsAgreementsCreateRequestKind>,
     *   partnerId?: ?string,
     *   employeeId?: ?string,
     *   bankAccountId?: ?string,
     *   name?: ?string,
     *   endDate?: ?string,
     *   autoRenew?: ?bool,
     *   value?: ?string,
     *   billingPeriod?: ?value-of<PostV1AgreementsAgreementsCreateRequestBillingPeriod>,
     *   currency?: ?string,
     *   status?: ?value-of<PostV1AgreementsAgreementsCreateRequestStatus>,
     *   notes?: ?string,
     *   documentRef?: ?string,
     *   items?: ?array<PostV1AgreementsAgreementsCreateRequestItemsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->typeId = $values['typeId'] ?? null;
        $this->kind = $values['kind'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->employeeId = $values['employeeId'] ?? null;
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->number = $values['number'];
        $this->name = $values['name'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->autoRenew = $values['autoRenew'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->billingPeriod = $values['billingPeriod'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
        $this->items = $values['items'] ?? null;
    }
}
