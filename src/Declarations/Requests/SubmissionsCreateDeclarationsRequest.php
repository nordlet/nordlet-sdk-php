<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\SubmissionsCreateDeclarationsRequestObligation;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\SubmissionsCreateDeclarationsRequestDataType;

class SubmissionsCreateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<SubmissionsCreateDeclarationsRequestObligation> $obligation
     */
    #[JsonProperty('obligation')]
    public string $obligation;

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
     * @var ?value-of<SubmissionsCreateDeclarationsRequestDataType> $dataType
     */
    #[JsonProperty('dataType')]
    public ?string $dataType;

    /**
     * @param array{
     *   obligation: value-of<SubmissionsCreateDeclarationsRequestObligation>,
     *   year: int,
     *   month: int,
     *   dataType?: ?value-of<SubmissionsCreateDeclarationsRequestDataType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->obligation = $values['obligation'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->dataType = $values['dataType'] ?? null;
    }
}
