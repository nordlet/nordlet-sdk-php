<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankImportTemplatesCreateRequestType;
use Nordlet\Bank\Types\PostV1BankImportTemplatesCreateRequestFieldsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1BankImportTemplatesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<PostV1BankImportTemplatesCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?array<PostV1BankImportTemplatesCreateRequestFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1BankImportTemplatesCreateRequestFieldsItem::class])]
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
     * @param array{
     *   name: string,
     *   type: value-of<PostV1BankImportTemplatesCreateRequestType>,
     *   fields?: ?array<PostV1BankImportTemplatesCreateRequestFieldsItem>,
     *   metaFields?: ?array<string>,
     *   invoiceMetaField?: ?string,
     *   invoiceVatRatePercent?: ?string,
     *   companyMetaField?: ?string,
     *   invoiceItemId?: ?string,
     *   advanceInvoices?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->type = $values['type'];
        $this->fields = $values['fields'] ?? null;
        $this->metaFields = $values['metaFields'] ?? null;
        $this->invoiceMetaField = $values['invoiceMetaField'] ?? null;
        $this->invoiceVatRatePercent = $values['invoiceVatRatePercent'] ?? null;
        $this->companyMetaField = $values['companyMetaField'] ?? null;
        $this->invoiceItemId = $values['invoiceItemId'] ?? null;
        $this->advanceInvoices = $values['advanceInvoices'] ?? null;
    }
}
