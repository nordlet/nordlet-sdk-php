<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class BomsGetProductionResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $finishedItemId
     */
    #[JsonProperty('finishedItemId')]
    public string $finishedItemId;

    /**
     * @var string $outputQuantity
     */
    #[JsonProperty('outputQuantity')]
    public string $outputQuantity;

    /**
     * @var ?string $routingId
     */
    #[JsonProperty('routingId')]
    public ?string $routingId;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var array<BomsGetProductionResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([BomsGetProductionResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   finishedItemId: string,
     *   outputQuantity: string,
     *   isActive: bool,
     *   lines: array<BomsGetProductionResponseLinesItem>,
     *   routingId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->finishedItemId = $values['finishedItemId'];
        $this->outputQuantity = $values['outputQuantity'];
        $this->routingId = $values['routingId'] ?? null;
        $this->isActive = $values['isActive'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
