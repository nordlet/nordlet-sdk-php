<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MergePartnersRequest extends JsonSerializableType
{
    /**
     * @var string $sourceId
     */
    #[JsonProperty('sourceId')]
    public string $sourceId;

    /**
     * @var string $targetId
     */
    #[JsonProperty('targetId')]
    public string $targetId;

    /**
     * @param array{
     *   sourceId: string,
     *   targetId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sourceId = $values['sourceId'];
        $this->targetId = $values['targetId'];
    }
}
