<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CreateCalendarResponseCorrection extends JsonSerializableType
{
    /**
     * @var array<value-of<CreateCalendarResponseCorrectionRequiredItem>> $required
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public array $required;

    /**
     * @var array<value-of<CreateCalendarResponseCorrectionOptionalItem>> $optional
     */
    #[JsonProperty('optional'), ArrayType(['string'])]
    public array $optional;

    /**
     * @var array<CreateCalendarResponseCorrectionReasonCodesItem> $reasonCodes
     */
    #[JsonProperty('reasonCodes'), ArrayType([CreateCalendarResponseCorrectionReasonCodesItem::class])]
    public array $reasonCodes;

    /**
     * @var bool $carry
     */
    #[JsonProperty('carry')]
    public bool $carry;

    /**
     * @param array{
     *   required: array<value-of<CreateCalendarResponseCorrectionRequiredItem>>,
     *   optional: array<value-of<CreateCalendarResponseCorrectionOptionalItem>>,
     *   reasonCodes: array<CreateCalendarResponseCorrectionReasonCodesItem>,
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
