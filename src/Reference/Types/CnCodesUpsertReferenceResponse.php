<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CnCodesUpsertReferenceResponse extends JsonSerializableType
{
    /**
     * @var int $upserted
     */
    #[JsonProperty('upserted')]
    public int $upserted;

    /**
     * @param array{
     *   upserted: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->upserted = $values['upserted'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
