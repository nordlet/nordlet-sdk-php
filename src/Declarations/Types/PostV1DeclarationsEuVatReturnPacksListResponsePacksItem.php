<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuVatReturnPacksListResponsePacksItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $formKey
     */
    #[JsonProperty('formKey')]
    public string $formKey;

    /**
     * @var string $formName
     */
    #[JsonProperty('formName')]
    public string $formName;

    /**
     * @var value-of<PostV1DeclarationsEuVatReturnPacksListResponsePacksItemFrequency> $frequency
     */
    #[JsonProperty('frequency')]
    public string $frequency;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   countryCode: string,
     *   formKey: string,
     *   formName: string,
     *   frequency: value-of<PostV1DeclarationsEuVatReturnPacksListResponsePacksItemFrequency>,
     *   source: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->formKey = $values['formKey'];
        $this->formName = $values['formName'];
        $this->frequency = $values['frequency'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
