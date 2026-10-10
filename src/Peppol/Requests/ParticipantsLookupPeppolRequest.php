<?php

namespace Nordlet\Peppol\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ParticipantsLookupPeppolRequest extends JsonSerializableType
{
    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $participantId
     */
    #[JsonProperty('participantId')]
    public ?string $participantId;

    /**
     * @param array{
     *   partnerId?: ?string,
     *   participantId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->partnerId = $values['partnerId'] ?? null;
        $this->participantId = $values['participantId'] ?? null;
    }
}
