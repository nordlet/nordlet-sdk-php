<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionBomsCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1ProductionBomsCreateRequest extends JsonSerializableType
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
     * @var array<PostV1ProductionBomsCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1ProductionBomsCreateRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   finishedItemId: string,
     *   lines: array<PostV1ProductionBomsCreateRequestLinesItem>,
     *   outputQuantity?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->finishedItemId = $values['finishedItemId'];
        $this->outputQuantity = $values['outputQuantity'] ?? null;
        $this->lines = $values['lines'];
    }
}
