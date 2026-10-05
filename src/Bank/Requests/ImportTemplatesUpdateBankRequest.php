<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\ImportTemplatesUpdateBankRequestType;
use Nordlet\Bank\Types\ImportTemplatesUpdateBankRequestFieldsItem;
use Nordlet\Core\Types\ArrayType;

class ImportTemplatesUpdateBankRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<ImportTemplatesUpdateBankRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<ImportTemplatesUpdateBankRequestFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([ImportTemplatesUpdateBankRequestFieldsItem::class])]
    public ?array $fields;

    /**
     * @var ?array<string> $metaFields
     */
    #[JsonProperty('metaFields'), ArrayType(['string'])]
    public ?array $metaFields;

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
     * @var ?bool $advanceInvoices
     */
    #[JsonProperty('advanceInvoices')]
    public ?bool $advanceInvoices;

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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   type?: ?value-of<ImportTemplatesUpdateBankRequestType>,
     *   fields?: ?array<ImportTemplatesUpdateBankRequestFieldsItem>,
     *   metaFields?: ?array<string>,
     *   invoiceMetaField?: ?string,
     *   invoiceVatRatePercent?: ?string,
     *   companyMetaField?: ?string,
     *   invoiceItemId?: ?string,
     *   advanceInvoices?: ?bool,
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
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->metaFields = $values['metaFields'] ?? null;
        $this->invoiceMetaField = $values['invoiceMetaField'] ?? null;
        $this->invoiceVatRatePercent = $values['invoiceVatRatePercent'] ?? null;
        $this->companyMetaField = $values['companyMetaField'] ?? null;
        $this->invoiceItemId = $values['invoiceItemId'] ?? null;
        $this->advanceInvoices = $values['advanceInvoices'] ?? null;
        $this->authorizationOperationTypeId = $values['authorizationOperationTypeId'] ?? null;
        $this->payoutOperationTypeId = $values['payoutOperationTypeId'] ?? null;
        $this->commissionOperationTypeId = $values['commissionOperationTypeId'] ?? null;
        $this->lenderMetaField = $values['lenderMetaField'] ?? null;
        $this->partialRefundLabel = $values['partialRefundLabel'] ?? null;
        $this->fullRefundLabel = $values['fullRefundLabel'] ?? null;
        $this->id = $values['id'];
    }
}
