<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LeadsNotesCreateRequest extends JsonSerializableType
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
