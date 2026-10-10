<?php

namespace Nordlet\Peppol\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ParticipantsLookupPeppolResponse extends JsonSerializableType
{
    /**
     * @var string $participantId
     */
    #[JsonProperty('participantId')]
    public string $participantId;

    /**
     * @var bool $registered
     */
    #[JsonProperty('registered')]
    public bool $registered;

    /**
     * @var ?string $smpUrl
     */
    #[JsonProperty('smpUrl')]
    public ?string $smpUrl;

    /**
     * @var ?string $accessPointUrl
     */
    #[JsonProperty('accessPointUrl')]
    public ?string $accessPointUrl;

    /**
     * @var bool $acceptsInvoice
     */
    #[JsonProperty('acceptsInvoice')]
    public bool $acceptsInvoice;

    /**
     * @var bool $acceptsCreditNote
     */
    #[JsonProperty('acceptsCreditNote')]
    public bool $acceptsCreditNote;

    /**
     * @var bool $acceptsCii
     */
    #[JsonProperty('acceptsCii')]
    public bool $acceptsCii;

    /**
     * @param array{
     *   participantId: string,
     *   registered: bool,
     *   acceptsInvoice: bool,
     *   acceptsCreditNote: bool,
     *   acceptsCii: bool,
     *   smpUrl?: ?string,
     *   accessPointUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->participantId = $values['participantId'];
        $this->registered = $values['registered'];
        $this->smpUrl = $values['smpUrl'] ?? null;
        $this->accessPointUrl = $values['accessPointUrl'] ?? null;
        $this->acceptsInvoice = $values['acceptsInvoice'];
        $this->acceptsCreditNote = $values['acceptsCreditNote'];
        $this->acceptsCii = $values['acceptsCii'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
