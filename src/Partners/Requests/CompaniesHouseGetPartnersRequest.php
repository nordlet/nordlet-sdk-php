<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CompaniesHouseGetPartnersRequest extends JsonSerializableType
{
    /**
     * @var string $companyNumber
     */
    #[JsonProperty('companyNumber')]
    public string $companyNumber;

    /**
     * @param array{
     *   companyNumber: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyNumber = $values['companyNumber'];
    }
}
