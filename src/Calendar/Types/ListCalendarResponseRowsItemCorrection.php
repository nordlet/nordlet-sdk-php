<?php

namespace Nordlet\Calendar\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ListCalendarResponseRowsItemCorrection extends JsonSerializableType
{
    /**
     * @var array<value-of<ListCalendarResponseRowsItemCorrectionRequiredItem>> $required
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public array $required;

    /**
     * @var array<value-of<ListCalendarResponseRowsItemCorrectionOptionalItem>> $optional
     */
    #[JsonProperty('optional'), ArrayType(['string'])]
    public array $optional;

    /**
     * @var array<ListCalendarResponseRowsItemCorrectionReasonCodesItem> $reasonCodes
     */
    #[JsonProperty('reasonCodes'), ArrayType([ListCalendarResponseRowsItemCorrectionReasonCodesItem::class])]
    public array $reasonCodes;

    /**
     * @var bool $carry
     */
    #[JsonProperty('carry')]
    public bool $carry;

    /**
     * @param array{
     *   required: array<value-of<ListCalendarResponseRowsItemCorrectionRequiredItem>>,
     *   optional: array<value-of<ListCalendarResponseRowsItemCorrectionOptionalItem>>,
     *   reasonCodes: array<ListCalendarResponseRowsItemCorrectionReasonCodesItem>,
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
