<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatProrataListDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var string $percent
     */
    #[JsonProperty('percent')]
    public string $percent;

    /**
     * @param array{
     *   fiscalYear: int,
     *   percent: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fiscalYear = $values['fiscalYear'];
        $this->percent = $values['percent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
