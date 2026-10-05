<?php

namespace Nordlet\Leads\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FilesListLeadsRequest extends JsonSerializableType
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
