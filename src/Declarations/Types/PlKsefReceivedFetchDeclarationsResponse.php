<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlKsefReceivedFetchDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $ksefNumber
     */
    #[JsonProperty('ksefNumber')]
    public string $ksefNumber;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var ?string $attachedTo
     */
    #[JsonProperty('attachedTo')]
    public ?string $attachedTo;

    /**
     * @param array{
     *   ksefNumber: string,
     *   xml: string,
     *   attachedTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ksefNumber = $values['ksefNumber'];
        $this->xml = $values['xml'];
        $this->attachedTo = $values['attachedTo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
