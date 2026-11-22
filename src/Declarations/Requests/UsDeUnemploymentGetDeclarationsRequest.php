<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsDeUnemploymentGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $quarter
     */
    #[JsonProperty('quarter')]
    public int $quarter;

    /**
     * @var ?string $approvedCredit
     */
    #[JsonProperty('approvedCredit')]
    public ?string $approvedCredit;

    /**
     * @var ?string $interest
     */
    #[JsonProperty('interest')]
    public ?string $interest;

    /**
     * @var ?string $penalty
     */
    #[JsonProperty('penalty')]
    public ?string $penalty;

    /**
     * @param array{
     *   year: int,
     *   quarter: int,
     *   approvedCredit?: ?string,
     *   interest?: ?string,
     *   penalty?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->approvedCredit = $values['approvedCredit'] ?? null;
        $this->interest = $values['interest'] ?? null;
        $this->penalty = $values['penalty'] ?? null;
    }
}
