<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\LtIsafGenerateDeclarationsRequestDataType;

class LtIsafGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?value-of<LtIsafGenerateDeclarationsRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   dataType?: ?value-of<LtIsafGenerateDeclarationsRequestDataType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->dataType = $values['dataType'] ?? null;
    }
}
