<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsListDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $taxYear
     */
    #[JsonProperty('taxYear')]
    public int $taxYear;

    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @param array{
     *   taxYear: int,
     *   employeeId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->taxYear = $values['taxYear'];
        $this->employeeId = $values['employeeId'] ?? null;
    }
}
