<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BooksValidateMigrationResponsePartners extends JsonSerializableType
{
    /**
     * @var int $created
     */
    #[JsonProperty('created')]
    public int $created;

    /**
     * @var int $existing
     */
    #[JsonProperty('existing')]
    public int $existing;

    /**
     * @param array{
     *   created: int,
     *   existing: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->existing = $values['existing'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
