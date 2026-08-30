<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksImportRequestAssetGroupsItem extends JsonSerializableType
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
     * @var ?int $defaultUsefulLifeMonths
     */
    #[JsonProperty('defaultUsefulLifeMonths')]
    public ?int $defaultUsefulLifeMonths;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   assetAccountCode: string,
     *   depreciationAccountCode: string,
     *   expenseAccountCode?: ?string,
     *   defaultUsefulLifeMonths?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->assetAccountCode = $values['assetAccountCode'];
        $this->depreciationAccountCode = $values['depreciationAccountCode'];
        $this->expenseAccountCode = $values['expenseAccountCode'] ?? null;
        $this->defaultUsefulLifeMonths = $values['defaultUsefulLifeMonths'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
