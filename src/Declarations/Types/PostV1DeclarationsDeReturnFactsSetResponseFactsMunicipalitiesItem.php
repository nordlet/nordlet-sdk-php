<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetResponseFactsMunicipalitiesItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $postalCode
     */
    #[JsonProperty('postalCode')]
    public string $postalCode;

    /**
     * @var string $ags
     */
    #[JsonProperty('ags')]
    public string $ags;

    /**
     * @var string $hebesatz
     */
    #[JsonProperty('hebesatz')]
    public string $hebesatz;

    /**
     * @var string $wages
     */
    #[JsonProperty('wages')]
    public string $wages;

    /**
     * @param array{
     *   name: string,
     *   postalCode: string,
     *   ags: string,
     *   hebesatz: string,
     *   wages: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->postalCode = $values['postalCode'];
        $this->ags = $values['ags'];
        $this->hebesatz = $values['hebesatz'];
        $this->wages = $values['wages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
