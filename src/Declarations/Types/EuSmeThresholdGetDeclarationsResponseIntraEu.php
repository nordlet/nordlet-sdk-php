<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuSmeThresholdGetDeclarationsResponseIntraEu extends JsonSerializableType
{
    /**
     * @var string $trigger
     */
    #[JsonProperty('trigger')]
    public string $trigger;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $acquisitionsFromMemberStates
     */
    #[JsonProperty('acquisitionsFromMemberStates')]
    public string $acquisitionsFromMemberStates;

    /**
     * @var string $servicesToMemberStates
     */
    #[JsonProperty('servicesToMemberStates')]
    public string $servicesToMemberStates;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var value-of<EuSmeThresholdGetDeclarationsResponseIntraEuStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $note
     */
    #[JsonProperty('note')]
    public string $note;

    /**
     * @param array{
     *   trigger: string,
     *   currency: string,
     *   acquisitionsFromMemberStates: string,
     *   servicesToMemberStates: string,
     *   total: string,
     *   status: value-of<EuSmeThresholdGetDeclarationsResponseIntraEuStatus>,
     *   note: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->trigger = $values['trigger'];
        $this->currency = $values['currency'];
        $this->acquisitionsFromMemberStates = $values['acquisitionsFromMemberStates'];
        $this->servicesToMemberStates = $values['servicesToMemberStates'];
        $this->total = $values['total'];
        $this->status = $values['status'];
        $this->note = $values['note'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
