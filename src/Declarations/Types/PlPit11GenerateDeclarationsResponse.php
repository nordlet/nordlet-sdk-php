<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PlPit11GenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

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
     * @var array<PlPit11GenerateDeclarationsResponsePersonsItem> $persons
     */
    #[JsonProperty('persons'), ArrayType([PlPit11GenerateDeclarationsResponsePersonsItem::class])]
    public array $persons;

    /**
     * @param array{
     *   year: int,
     *   source: string,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   persons: array<PlPit11GenerateDeclarationsResponsePersonsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->source = $values['source'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->persons = $values['persons'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
