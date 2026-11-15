<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UpdateCalendarResponseCorrection extends JsonSerializableType
{
    /**
     * @var array<value-of<UpdateCalendarResponseCorrectionRequiredItem>> $required
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public array $required;

    /**
     * @var array<value-of<UpdateCalendarResponseCorrectionOptionalItem>> $optional
     */
    #[JsonProperty('optional'), ArrayType(['string'])]
    public array $optional;

    /**
     * @var array<UpdateCalendarResponseCorrectionReasonCodesItem> $reasonCodes
     */
    #[JsonProperty('reasonCodes'), ArrayType([UpdateCalendarResponseCorrectionReasonCodesItem::class])]
    public array $reasonCodes;

    /**
     * @var bool $carry
     */
    #[JsonProperty('carry')]
    public bool $carry;

    /**
     * @param array{
     *   required: array<value-of<UpdateCalendarResponseCorrectionRequiredItem>>,
     *   optional: array<value-of<UpdateCalendarResponseCorrectionOptionalItem>>,
     *   reasonCodes: array<UpdateCalendarResponseCorrectionReasonCodesItem>,
     *   carry: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->required = $values['required'];
        $this->optional = $values['optional'];
        $this->reasonCodes = $values['reasonCodes'];
        $this->carry = $values['carry'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
