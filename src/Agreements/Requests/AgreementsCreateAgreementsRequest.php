<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\AgreementsCreateAgreementsRequestKind;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Agreements\Types\AgreementsCreateAgreementsRequestBillingPeriod;
use Nordlet\Agreements\Types\AgreementsCreateAgreementsRequestStatus;
use Nordlet\Agreements\Types\AgreementsCreateAgreementsRequestItemsItem;
use Nordlet\Core\Types\ArrayType;

class AgreementsCreateAgreementsRequest extends JsonSerializableType
{
    /**
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var ?value-of<AgreementsCreateAgreementsRequestKind> $kind
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
     * @var ?value-of<AgreementsCreateAgreementsRequestBillingPeriod> $billingPeriod
     */
    #[JsonProperty('billingPeriod')]
    public ?string $billingPeriod;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?value-of<AgreementsCreateAgreementsRequestStatus> $status
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
     * @var ?array<AgreementsCreateAgreementsRequestItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([AgreementsCreateAgreementsRequestItemsItem::class])]
    public ?array $items;

    /**
     * @param array{
     *   number: string,
     *   startDate: DateTime,
     *   typeId?: ?string,
     *   kind?: ?value-of<AgreementsCreateAgreementsRequestKind>,
     *   partnerId?: ?string,
     *   employeeId?: ?string,
     *   bankAccountId?: ?string,
     *   name?: ?string,
     *   endDate?: ?DateTime,
     *   autoRenew?: ?bool,
     *   value?: ?string,
     *   billingPeriod?: ?value-of<AgreementsCreateAgreementsRequestBillingPeriod>,
     *   currency?: ?string,
     *   status?: ?value-of<AgreementsCreateAgreementsRequestStatus>,
     *   notes?: ?string,
     *   documentRef?: ?string,
     *   items?: ?array<AgreementsCreateAgreementsRequestItemsItem>,
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
