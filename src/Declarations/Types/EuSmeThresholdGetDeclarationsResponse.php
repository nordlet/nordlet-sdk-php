<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuSmeThresholdGetDeclarationsResponse extends JsonSerializableType
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
     * @var ?EuSmeThresholdGetDeclarationsResponseThreshold $threshold
     */
    #[JsonProperty('threshold')]
    public ?EuSmeThresholdGetDeclarationsResponseThreshold $threshold;

    /**
     * @var EuSmeThresholdGetDeclarationsResponseTurnover $turnover
     */
    #[JsonProperty('turnover')]
    public EuSmeThresholdGetDeclarationsResponseTurnover $turnover;

    /**
     * @var EuSmeThresholdGetDeclarationsResponsePrecedingTurnover $precedingTurnover
     */
    #[JsonProperty('precedingTurnover')]
    public EuSmeThresholdGetDeclarationsResponsePrecedingTurnover $precedingTurnover;

    /**
     * @var value-of<EuSmeThresholdGetDeclarationsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $headroomAmount
     */
    #[JsonProperty('headroomAmount')]
    public ?string $headroomAmount;

    /**
     * @var ?EuSmeThresholdGetDeclarationsResponseIntraEu $intraEu
     */
    #[JsonProperty('intraEu')]
    public ?EuSmeThresholdGetDeclarationsResponseIntraEu $intraEu;

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
     *   turnover: EuSmeThresholdGetDeclarationsResponseTurnover,
     *   precedingTurnover: EuSmeThresholdGetDeclarationsResponsePrecedingTurnover,
     *   status: value-of<EuSmeThresholdGetDeclarationsResponseStatus>,
     *   warnings: array<string>,
     *   threshold?: ?EuSmeThresholdGetDeclarationsResponseThreshold,
     *   headroomAmount?: ?string,
     *   intraEu?: ?EuSmeThresholdGetDeclarationsResponseIntraEu,
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
