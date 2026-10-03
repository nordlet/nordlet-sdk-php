<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Assets\Types\PostV1AssetsAssetsInputVatRequestInputVatUseChangesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1AssetsAssetsInputVatRequest extends JsonSerializableType
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
     * @var ?string $inputVatFirstUseDate
     */
    #[JsonProperty('inputVatFirstUseDate')]
    public ?string $inputVatFirstUseDate;

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
     * @var array<PostV1AssetsAssetsInputVatRequestInputVatUseChangesItem> $inputVatUseChanges
     */
    #[JsonProperty('inputVatUseChanges'), ArrayType([PostV1AssetsAssetsInputVatRequestInputVatUseChangesItem::class])]
    public array $inputVatUseChanges;

    /**
     * @param array{
     *   id: string,
     *   inputVatRealEstate: bool,
     *   inputVatUseChanges: array<PostV1AssetsAssetsInputVatRequestInputVatUseChangesItem>,
     *   inputVatAmount?: ?string,
     *   inputVatFirstUseDate?: ?string,
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
