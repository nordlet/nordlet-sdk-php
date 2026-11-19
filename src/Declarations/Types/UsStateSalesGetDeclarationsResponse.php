<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsStateSalesGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $to
     */
    #[JsonProperty('to')]
    public string $to;

    /**
     * @var array<UsStateSalesGetDeclarationsResponseStatesItem> $states
     */
    #[JsonProperty('states'), ArrayType([UsStateSalesGetDeclarationsResponseStatesItem::class])]
    public array $states;

    /**
     * @var UsStateSalesGetDeclarationsResponseWithoutState $withoutState
     */
    #[JsonProperty('withoutState')]
    public UsStateSalesGetDeclarationsResponseWithoutState $withoutState;

    /**
     * @var UsStateSalesGetDeclarationsResponseOutsideUs $outsideUs
     */
    #[JsonProperty('outsideUs')]
    public UsStateSalesGetDeclarationsResponseOutsideUs $outsideUs;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   from: string,
     *   to: string,
     *   states: array<UsStateSalesGetDeclarationsResponseStatesItem>,
     *   withoutState: UsStateSalesGetDeclarationsResponseWithoutState,
     *   outsideUs: UsStateSalesGetDeclarationsResponseOutsideUs,
     *   warnings: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->states = $values['states'];
        $this->withoutState = $values['withoutState'];
        $this->outsideUs = $values['outsideUs'];
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
