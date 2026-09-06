<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankImportTemplatesUpdateRequestType;
use Nordlet\Bank\Types\PostV1BankImportTemplatesUpdateRequestFieldsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1BankImportTemplatesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<PostV1BankImportTemplatesUpdateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<PostV1BankImportTemplatesUpdateRequestFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([PostV1BankImportTemplatesUpdateRequestFieldsItem::class])]
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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   type?: ?value-of<PostV1BankImportTemplatesUpdateRequestType>,
     *   fields?: ?array<PostV1BankImportTemplatesUpdateRequestFieldsItem>,
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
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->fields = $values['fields'] ?? null;
        $this->metaFields = $values['metaFields'] ?? null;
        $this->invoiceMetaField = $values['invoiceMetaField'] ?? null;
        $this->invoiceVatRatePercent = $values['invoiceVatRatePercent'] ?? null;
        $this->companyMetaField = $values['companyMetaField'] ?? null;
        $this->invoiceItemId = $values['invoiceItemId'] ?? null;
        $this->advanceInvoices = $values['advanceInvoices'] ?? null;
        $this->id = $values['id'];
    }
}
