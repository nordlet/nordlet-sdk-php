<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlZusDraComputeResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $insured
     */
    #[JsonProperty('insured')]
    public string $insured;

    /**
     * @var string $payer
     */
    #[JsonProperty('payer')]
    public string $payer;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   code: string,
     *   label: string,
     *   insured: string,
     *   payer: string,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->label = $values['label'];
        $this->insured = $values['insured'];
        $this->payer = $values['payer'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
