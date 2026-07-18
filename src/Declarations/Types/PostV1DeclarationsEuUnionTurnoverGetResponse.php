<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuUnionTurnoverGetResponse extends JsonSerializableType
{
    /**
     * @var string $capEur
     */
    #[JsonProperty('capEur')]
    public string $capEur;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public bool $isVatPayer;

    /**
     * @var PostV1DeclarationsEuUnionTurnoverGetResponseCurrentYear $currentYear
     */
    #[JsonProperty('currentYear')]
    public PostV1DeclarationsEuUnionTurnoverGetResponseCurrentYear $currentYear;

    /**
     * @var PostV1DeclarationsEuUnionTurnoverGetResponsePreviousYear $previousYear
     */
    #[JsonProperty('previousYear')]
    public PostV1DeclarationsEuUnionTurnoverGetResponsePreviousYear $previousYear;

    /**
     * @var value-of<PostV1DeclarationsEuUnionTurnoverGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $headroomAmount
     */
    #[JsonProperty('headroomAmount')]
    public ?string $headroomAmount;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   capEur: string,
     *   currency: string,
     *   isVatPayer: bool,
     *   currentYear: PostV1DeclarationsEuUnionTurnoverGetResponseCurrentYear,
     *   previousYear: PostV1DeclarationsEuUnionTurnoverGetResponsePreviousYear,
     *   status: value-of<PostV1DeclarationsEuUnionTurnoverGetResponseStatus>,
     *   warnings: array<string>,
     *   headroomAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capEur = $values['capEur'];
        $this->currency = $values['currency'];
        $this->isVatPayer = $values['isVatPayer'];
        $this->currentYear = $values['currentYear'];
        $this->previousYear = $values['previousYear'];
        $this->status = $values['status'];
        $this->headroomAmount = $values['headroomAmount'] ?? null;
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
