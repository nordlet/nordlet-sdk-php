<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Assets\Types\AssetsInputVatAssetsRequestInputVatUseChangesItem;
use Nordlet\Core\Types\ArrayType;

class AssetsInputVatAssetsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $inputVatAmount
     */
    #[JsonProperty('inputVatAmount')]
    public ?string $inputVatAmount;

    /**
     * @var ?DateTime $inputVatFirstUseDate
     */
    #[JsonProperty('inputVatFirstUseDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $inputVatFirstUseDate;

    /**
     * @var ?string $inputVatDeductiblePercent
     */
    #[JsonProperty('inputVatDeductiblePercent')]
    public ?string $inputVatDeductiblePercent;

    /**
     * @var bool $inputVatRealEstate
     */
    #[JsonProperty('inputVatRealEstate')]
    public bool $inputVatRealEstate;

    /**
     * @var array<AssetsInputVatAssetsRequestInputVatUseChangesItem> $inputVatUseChanges
     */
    #[JsonProperty('inputVatUseChanges'), ArrayType([AssetsInputVatAssetsRequestInputVatUseChangesItem::class])]
    public array $inputVatUseChanges;

    /**
     * @param array{
     *   id: string,
     *   inputVatRealEstate: bool,
     *   inputVatUseChanges: array<AssetsInputVatAssetsRequestInputVatUseChangesItem>,
     *   inputVatAmount?: ?string,
     *   inputVatFirstUseDate?: ?DateTime,
     *   inputVatDeductiblePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->inputVatAmount = $values['inputVatAmount'] ?? null;
        $this->inputVatFirstUseDate = $values['inputVatFirstUseDate'] ?? null;
        $this->inputVatDeductiblePercent = $values['inputVatDeductiblePercent'] ?? null;
        $this->inputVatRealEstate = $values['inputVatRealEstate'];
        $this->inputVatUseChanges = $values['inputVatUseChanges'];
    }
}
