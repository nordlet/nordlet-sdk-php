<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsPlJpkMagGenerateResponse extends JsonSerializableType
{
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
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

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
     * @var string $warehouseCode
     */
    #[JsonProperty('warehouseCode')]
    public string $warehouseCode;

    /**
     * @var PostV1DeclarationsPlJpkMagGenerateResponseCounts $counts
     */
    #[JsonProperty('counts')]
    public PostV1DeclarationsPlJpkMagGenerateResponseCounts $counts;

    /**
     * @param array{
     *   fileName: string,
     *   xml: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     *   warehouseCode: string,
     *   counts: PostV1DeclarationsPlJpkMagGenerateResponseCounts,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->xml = $values['xml'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->warnings = $values['warnings'];
        $this->notes = $values['notes'];
        $this->source = $values['source'];
        $this->warehouseCode = $values['warehouseCode'];
        $this->counts = $values['counts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
