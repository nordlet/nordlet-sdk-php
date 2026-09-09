<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LeadsNotesListRequest extends JsonSerializableType
{
    /**
     * @var string $leadId
     */
    #[JsonProperty('leadId')]
    public string $leadId;

    /**
     * @param array{
     *   leadId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->leadId = $values['leadId'];
    }
}
