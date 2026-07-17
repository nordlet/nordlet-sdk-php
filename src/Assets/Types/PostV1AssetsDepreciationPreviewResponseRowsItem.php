<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AssetsDepreciationPreviewResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $assetId
     */
    #[JsonProperty('assetId')]
    public string $assetId;

    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var bool $alreadyPosted
     */
    #[JsonProperty('alreadyPosted')]
    public bool $alreadyPosted;

    /**
     * @param array{
     *   assetId: string,
     *   code: string,
     *   name: string,
     *   amount: string,
     *   alreadyPosted: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->assetId = $values['assetId'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->amount = $values['amount'];
        $this->alreadyPosted = $values['alreadyPosted'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
