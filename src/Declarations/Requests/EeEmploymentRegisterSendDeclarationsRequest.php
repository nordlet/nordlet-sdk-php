<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\EeEmploymentRegisterSendDeclarationsRequestEvent;

class EeEmploymentRegisterSendDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $contractId
     */
    #[JsonProperty('contractId')]
    public string $contractId;

    /**
     * @var value-of<EeEmploymentRegisterSendDeclarationsRequestEvent> $event
     */
    #[JsonProperty('event')]
    public string $event;

    /**
     * @param array{
     *   contractId: string,
     *   event: value-of<EeEmploymentRegisterSendDeclarationsRequestEvent>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contractId = $values['contractId'];
        $this->event = $values['event'];
    }
}
