<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIvazAmendDeclarationsRequestCorrectionsItem extends JsonSerializableType
{
    /**
     * @var string $waybillId
     */
    #[JsonProperty('waybillId')]
    public string $waybillId;

    /**
     * @var ?string $consigneePartnerId
     */
    #[JsonProperty('consigneePartnerId')]
    public ?string $consigneePartnerId;

    /**
     * @var ?string $unloadAddress
     */
    #[JsonProperty('unloadAddress')]
    public ?string $unloadAddress;

    /**
     * @var ?string $vehiclePlate
     */
    #[JsonProperty('vehiclePlate')]
    public ?string $vehiclePlate;

    /**
     * @var ?string $trailerPlate
     */
    #[JsonProperty('trailerPlate')]
    public ?string $trailerPlate;

    /**
     * @var ?string $driverName
     */
    #[JsonProperty('driverName')]
    public ?string $driverName;

    /**
     * @var ?string $driverSurname
     */
    #[JsonProperty('driverSurname')]
    public ?string $driverSurname;

    /**
     * @var ?array<LtIvazAmendDeclarationsRequestCorrectionsItemLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([LtIvazAmendDeclarationsRequestCorrectionsItemLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   waybillId: string,
     *   consigneePartnerId?: ?string,
     *   unloadAddress?: ?string,
     *   vehiclePlate?: ?string,
     *   trailerPlate?: ?string,
     *   driverName?: ?string,
     *   driverSurname?: ?string,
     *   lines?: ?array<LtIvazAmendDeclarationsRequestCorrectionsItemLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillId = $values['waybillId'];
        $this->consigneePartnerId = $values['consigneePartnerId'] ?? null;
        $this->unloadAddress = $values['unloadAddress'] ?? null;
        $this->vehiclePlate = $values['vehiclePlate'] ?? null;
        $this->trailerPlate = $values['trailerPlate'] ?? null;
        $this->driverName = $values['driverName'] ?? null;
        $this->driverSurname = $values['driverSurname'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
