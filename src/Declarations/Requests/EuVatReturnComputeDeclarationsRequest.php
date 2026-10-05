<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuVatReturnComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

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
     * @var ?int $months
     */
    #[JsonProperty('months')]
    public ?int $months;

    /**
     * @param array{
     *   countryCode: string,
     *   year: int,
     *   month: int,
     *   months?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->months = $values['months'] ?? null;
    }
}
