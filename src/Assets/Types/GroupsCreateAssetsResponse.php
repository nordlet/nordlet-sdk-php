<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GroupsCreateAssetsResponse extends JsonSerializableType
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
     * @var string $expenseAccountCode
     */
    #[JsonProperty('expenseAccountCode')]
    public string $expenseAccountCode;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   assetAccountCode: string,
     *   depreciationAccountCode: string,
     *   expenseAccountCode: string,
     *   id: string,
     *   createdAt: DateTime,
     *   defaultUsefulLifeMonths?: ?int,
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
        $this->expenseAccountCode = $values['expenseAccountCode'];
        $this->id = $values['id'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
