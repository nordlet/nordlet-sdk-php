<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuSmeCrossBorderReportComputeResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   countryCode: string,
     *   amount: string,
     *   documents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->amount = $values['amount'];
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
