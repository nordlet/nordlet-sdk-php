<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IntercompanyLinksRemoveConsolidationRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   groupId: string,
     *   id: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->id = $values['id'];
    }
}
