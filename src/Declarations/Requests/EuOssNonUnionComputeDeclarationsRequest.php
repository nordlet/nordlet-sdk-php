<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\EuOssNonUnionComputeDeclarationsRequestMemberStateOfIdentification;

class EuOssNonUnionComputeDeclarationsRequest extends JsonSerializableType
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
     * @var value-of<EuOssNonUnionComputeDeclarationsRequestMemberStateOfIdentification> $memberStateOfIdentification
     */
    #[JsonProperty('memberStateOfIdentification')]
    public string $memberStateOfIdentification;

    /**
     * @param array{
     *   year: int,
     *   quarter: int,
     *   memberStateOfIdentification: value-of<EuOssNonUnionComputeDeclarationsRequestMemberStateOfIdentification>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->quarter = $values['quarter'];
        $this->memberStateOfIdentification = $values['memberStateOfIdentification'];
    }
}
