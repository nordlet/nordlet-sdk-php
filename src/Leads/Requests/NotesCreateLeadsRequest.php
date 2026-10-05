<?php

namespace Nordlet\Leads\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class NotesCreateLeadsRequest extends JsonSerializableType
{
    /**
     * @var string $leadId
     */
    #[JsonProperty('leadId')]
    public string $leadId;

    /**
     * @var string $body
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @param array{
     *   leadId: string,
     *   body: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->leadId = $values['leadId'];
        $this->body = $values['body'];
    }
}
