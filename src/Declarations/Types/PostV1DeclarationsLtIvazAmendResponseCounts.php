<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtIvazAmendResponseCounts extends JsonSerializableType
{
    /**
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   documents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
