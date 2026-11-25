<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MtFs7GenerateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var array<MtFs7GenerateDeclarationsResponseBoxesItem> $boxes
     */
    #[JsonProperty('boxes'), ArrayType([MtFs7GenerateDeclarationsResponseBoxesItem::class])]
    public array $boxes;

    /**
     * @var array<string> $leftToPayer
     */
    #[JsonProperty('leftToPayer'), ArrayType(['string'])]
    public array $leftToPayer;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $pdf The working copy, base64
     */
    #[JsonProperty('pdf')]
    public string $pdf;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   year: int,
     *   boxes: array<MtFs7GenerateDeclarationsResponseBoxesItem>,
     *   leftToPayer: array<string>,
     *   fileName: string,
     *   pdf: string,
     *   warnings: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->boxes = $values['boxes'];
        $this->leftToPayer = $values['leftToPayer'];
        $this->fileName = $values['fileName'];
        $this->pdf = $values['pdf'];
        $this->warnings = $values['warnings'];
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
