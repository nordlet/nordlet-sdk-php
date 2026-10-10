<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuDac7PreviewDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @param array{
     *   year: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
    }
}
