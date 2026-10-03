<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetRequestFactsLandHoldingsItem extends JsonSerializableType
{
    /**
     * @var string $fileNumber
     */
    #[JsonProperty('fileNumber')]
    public string $fileNumber;

    /**
     * @var string $assessedValue
     */
    #[JsonProperty('assessedValue')]
    public string $assessedValue;

    /**
     * @var value-of<PostV1DeclarationsDeReturnFactsSetRequestFactsLandHoldingsItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @param array{
     *   fileNumber: string,
     *   assessedValue: string,
     *   category: value-of<PostV1DeclarationsDeReturnFactsSetRequestFactsLandHoldingsItemCategory>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileNumber = $values['fileNumber'];
        $this->assessedValue = $values['assessedValue'];
        $this->category = $values['category'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
