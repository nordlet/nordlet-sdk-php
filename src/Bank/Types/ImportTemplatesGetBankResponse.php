<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class ImportTemplatesGetBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<ImportTemplatesGetBankResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var array<ImportTemplatesGetBankResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([ImportTemplatesGetBankResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<string> $metaFields
     */
    #[JsonProperty('metaFields'), ArrayType(['string'])]
    public array $metaFields;

    /**
     * @var ?string $invoiceMetaField
     */
    #[JsonProperty('invoiceMetaField')]
    public ?string $invoiceMetaField;

    /**
     * @var ?string $invoiceVatRatePercent
     */
    #[JsonProperty('invoiceVatRatePercent')]
    public ?string $invoiceVatRatePercent;

    /**
     * @var ?string $companyMetaField
     */
    #[JsonProperty('companyMetaField')]
    public ?string $companyMetaField;

    /**
     * @var ?string $invoiceItemId
     */
    #[JsonProperty('invoiceItemId')]
    public ?string $invoiceItemId;

    /**
     * @var bool $advanceInvoices
     */
    #[JsonProperty('advanceInvoices')]
    public bool $advanceInvoices;

    /**
     * @var ?string $authorizationOperationTypeId
     */
    #[JsonProperty('authorizationOperationTypeId')]
    public ?string $authorizationOperationTypeId;

    /**
     * @var ?string $payoutOperationTypeId
     */
    #[JsonProperty('payoutOperationTypeId')]
    public ?string $payoutOperationTypeId;

    /**
     * @var ?string $commissionOperationTypeId
     */
    #[JsonProperty('commissionOperationTypeId')]
    public ?string $commissionOperationTypeId;

    /**
     * @var ?string $lenderMetaField
     */
    #[JsonProperty('lenderMetaField')]
    public ?string $lenderMetaField;

    /**
     * @var ?string $partialRefundLabel
     */
    #[JsonProperty('partialRefundLabel')]
    public ?string $partialRefundLabel;

    /**
     * @var ?string $fullRefundLabel
     */
    #[JsonProperty('fullRefundLabel')]
    public ?string $fullRefundLabel;

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
     *   name: string,
     *   type: value-of<ImportTemplatesGetBankResponseType>,
     *   fields: array<ImportTemplatesGetBankResponseFieldsItem>,
     *   metaFields: array<string>,
     *   advanceInvoices: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   invoiceMetaField?: ?string,
     *   invoiceVatRatePercent?: ?string,
     *   companyMetaField?: ?string,
     *   invoiceItemId?: ?string,
     *   authorizationOperationTypeId?: ?string,
     *   payoutOperationTypeId?: ?string,
     *   commissionOperationTypeId?: ?string,
     *   lenderMetaField?: ?string,
     *   partialRefundLabel?: ?string,
     *   fullRefundLabel?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->fields = $values['fields'];
        $this->metaFields = $values['metaFields'];
        $this->invoiceMetaField = $values['invoiceMetaField'] ?? null;
        $this->invoiceVatRatePercent = $values['invoiceVatRatePercent'] ?? null;
        $this->companyMetaField = $values['companyMetaField'] ?? null;
        $this->invoiceItemId = $values['invoiceItemId'] ?? null;
        $this->advanceInvoices = $values['advanceInvoices'];
        $this->authorizationOperationTypeId = $values['authorizationOperationTypeId'] ?? null;
        $this->payoutOperationTypeId = $values['payoutOperationTypeId'] ?? null;
        $this->commissionOperationTypeId = $values['commissionOperationTypeId'] ?? null;
        $this->lenderMetaField = $values['lenderMetaField'] ?? null;
        $this->partialRefundLabel = $values['partialRefundLabel'] ?? null;
        $this->fullRefundLabel = $values['fullRefundLabel'] ?? null;
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
