<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SubmissionsListDeclarationsResponseRowsItemCorrection extends JsonSerializableType
{
    /**
     * @var array<value-of<SubmissionsListDeclarationsResponseRowsItemCorrectionRequiredItem>> $required
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public array $required;

    /**
     * @var array<value-of<SubmissionsListDeclarationsResponseRowsItemCorrectionOptionalItem>> $optional
     */
    #[JsonProperty('optional'), ArrayType(['string'])]
    public array $optional;

    /**
     * @var array<SubmissionsListDeclarationsResponseRowsItemCorrectionReasonCodesItem> $reasonCodes
     */
    #[JsonProperty('reasonCodes'), ArrayType([SubmissionsListDeclarationsResponseRowsItemCorrectionReasonCodesItem::class])]
    public array $reasonCodes;

    /**
     * @var bool $carry
     */
    #[JsonProperty('carry')]
    public bool $carry;

    /**
     * @param array{
     *   required: array<value-of<SubmissionsListDeclarationsResponseRowsItemCorrectionRequiredItem>>,
     *   optional: array<value-of<SubmissionsListDeclarationsResponseRowsItemCorrectionOptionalItem>>,
     *   reasonCodes: array<SubmissionsListDeclarationsResponseRowsItemCorrectionReasonCodesItem>,
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
