<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BooksValidateMigrationRequestItemsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<BooksValidateMigrationRequestItemsItemType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $salePriceExclVat
     */
    #[JsonProperty('salePriceExclVat')]
    public ?string $salePriceExclVat;

    /**
     * @var ?string $purchasePriceExclVat
     */
    #[JsonProperty('purchasePriceExclVat')]
    public ?string $purchasePriceExclVat;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   type?: ?value-of<BooksValidateMigrationRequestItemsItemType>,
     *   unit?: ?string,
     *   barcode?: ?string,
     *   vatRatePercent?: ?string,
     *   salePriceExclVat?: ?string,
     *   purchasePriceExclVat?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->type = $values['type'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->salePriceExclVat = $values['salePriceExclVat'] ?? null;
        $this->purchasePriceExclVat = $values['purchasePriceExclVat'] ?? null;
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
