<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\BomsCreateProductionRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class BomsCreateProductionRequest extends JsonSerializableType
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
     * @var string $finishedItemId
     */
    #[JsonProperty('finishedItemId')]
    public string $finishedItemId;

    /**
     * @var ?string $outputQuantity
     */
    #[JsonProperty('outputQuantity')]
    public ?string $outputQuantity;

    /**
     * @var ?string $routingId
     */
    #[JsonProperty('routingId')]
    public ?string $routingId;

    /**
     * @var array<BomsCreateProductionRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([BomsCreateProductionRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   finishedItemId: string,
     *   lines: array<BomsCreateProductionRequestLinesItem>,
     *   outputQuantity?: ?string,
     *   routingId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->finishedItemId = $values['finishedItemId'];
        $this->outputQuantity = $values['outputQuantity'] ?? null;
        $this->routingId = $values['routingId'] ?? null;
        $this->lines = $values['lines'];
    }
}
