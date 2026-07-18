<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuVatReturnComputeResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $formKey
     */
    #[JsonProperty('formKey')]
    public string $formKey;

    /**
     * @var string $formName
     */
    #[JsonProperty('formName')]
    public string $formName;

    /**
     * @var value-of<PostV1DeclarationsEuVatReturnComputeResponseFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public string $frequency;

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
     * @var array<PostV1DeclarationsEuVatReturnComputeResponseBoxesItem> $boxes
     */
    #[JsonProperty('boxes'), ArrayType([PostV1DeclarationsEuVatReturnComputeResponseBoxesItem::class])]
    public array $boxes;

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
     *   countryCode: string,
     *   formKey: string,
     *   formName: string,
     *   frequency: value-of<PostV1DeclarationsEuVatReturnComputeResponseFrequency>,
     *   periodStart: string,
     *   periodEnd: string,
     *   boxes: array<PostV1DeclarationsEuVatReturnComputeResponseBoxesItem>,
     *   warnings: array<string>,
     *   notes: array<string>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->formKey = $values['formKey'];
        $this->formName = $values['formName'];
        $this->frequency = $values['frequency'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->boxes = $values['boxes'];
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
