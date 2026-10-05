<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RoEtransportBuildDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $waybillId
     */
    #[JsonProperty('waybillId')]
    public string $waybillId;

    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var string $operationType
     */
    #[JsonProperty('operationType')]
    public string $operationType;

    /**
     * @var string $vehiclePlate
     */
    #[JsonProperty('vehiclePlate')]
    public string $vehiclePlate;

    /**
     * @var array<string> $blockers
     */
    #[JsonProperty('blockers'), ArrayType(['string'])]
    public array $blockers;

    /**
     * @var int $goods
     */
    #[JsonProperty('goods')]
    public int $goods;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var array<string> $notes
     */
    #[JsonProperty('notes'), ArrayType(['string'])]
    public array $notes;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   waybillId: string,
     *   fileId: string,
     *   fileName: string,
     *   xml: string,
     *   operationType: string,
     *   vehiclePlate: string,
     *   blockers: array<string>,
     *   goods: int,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillId = $values['waybillId'];
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->operationType = $values['operationType'];
        $this->vehiclePlate = $values['vehiclePlate'];
        $this->blockers = $values['blockers'];
        $this->goods = $values['goods'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
