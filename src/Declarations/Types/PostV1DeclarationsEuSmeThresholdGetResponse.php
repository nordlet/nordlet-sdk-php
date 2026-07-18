<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuSmeThresholdGetResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public bool $isVatPayer;

    /**
     * @var string $baseCurrency
     */
    #[JsonProperty('baseCurrency')]
    public string $baseCurrency;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?PostV1DeclarationsEuSmeThresholdGetResponseThreshold $threshold
     */
    #[JsonProperty('threshold')]
    public ?PostV1DeclarationsEuSmeThresholdGetResponseThreshold $threshold;

    /**
     * @var PostV1DeclarationsEuSmeThresholdGetResponseTurnover $turnover
     */
    #[JsonProperty('turnover')]
    public PostV1DeclarationsEuSmeThresholdGetResponseTurnover $turnover;

    /**
     * @var PostV1DeclarationsEuSmeThresholdGetResponsePrecedingTurnover $precedingTurnover
     */
    #[JsonProperty('precedingTurnover')]
    public PostV1DeclarationsEuSmeThresholdGetResponsePrecedingTurnover $precedingTurnover;

    /**
     * @var value-of<PostV1DeclarationsEuSmeThresholdGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $headroomAmount
     */
    #[JsonProperty('headroomAmount')]
    public ?string $headroomAmount;

    /**
     * @var ?PostV1DeclarationsEuSmeThresholdGetResponseIntraEu $intraEu
     */
    #[JsonProperty('intraEu')]
    public ?PostV1DeclarationsEuSmeThresholdGetResponseIntraEu $intraEu;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   countryCode: string,
     *   isVatPayer: bool,
     *   baseCurrency: string,
     *   year: int,
     *   turnover: PostV1DeclarationsEuSmeThresholdGetResponseTurnover,
     *   precedingTurnover: PostV1DeclarationsEuSmeThresholdGetResponsePrecedingTurnover,
     *   status: value-of<PostV1DeclarationsEuSmeThresholdGetResponseStatus>,
     *   warnings: array<string>,
     *   threshold?: ?PostV1DeclarationsEuSmeThresholdGetResponseThreshold,
     *   headroomAmount?: ?string,
     *   intraEu?: ?PostV1DeclarationsEuSmeThresholdGetResponseIntraEu,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->isVatPayer = $values['isVatPayer'];
        $this->baseCurrency = $values['baseCurrency'];
        $this->year = $values['year'];
        $this->threshold = $values['threshold'] ?? null;
        $this->turnover = $values['turnover'];
        $this->precedingTurnover = $values['precedingTurnover'];
        $this->status = $values['status'];
        $this->headroomAmount = $values['headroomAmount'] ?? null;
        $this->intraEu = $values['intraEu'] ?? null;
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
