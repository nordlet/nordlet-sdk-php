<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AssetsGroupsCreateRequest extends JsonSerializableType
{
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
     * @var ?int $defaultUsefulLifeMonths
     */
    #[JsonProperty('defaultUsefulLifeMonths')]
    public ?int $defaultUsefulLifeMonths;

    /**
     * @var string $assetAccountCode
     */
    #[JsonProperty('assetAccountCode')]
    public string $assetAccountCode;

    /**
     * @var string $depreciationAccountCode
     */
    #[JsonProperty('depreciationAccountCode')]
    public string $depreciationAccountCode;

    /**
     * @var ?string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public ?string $expenseAccountCode;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   assetAccountCode: string,
     *   depreciationAccountCode: string,
     *   defaultUsefulLifeMonths?: ?int,
     *   expenseAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->defaultUsefulLifeMonths = $values['defaultUsefulLifeMonths'] ?? null;
        $this->assetAccountCode = $values['assetAccountCode'];
        $this->depreciationAccountCode = $values['depreciationAccountCode'];
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
    }
}
