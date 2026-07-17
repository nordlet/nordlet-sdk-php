<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountMeResponseCompaniesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var string $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var bool $isSandbox
     */
    #[JsonProperty('isSandbox')]
    public bool $isSandbox;

    /**
     * @var value-of<PostV1AccountMeResponseCompaniesItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $deletedAt
     */
    #[JsonProperty('deletedAt')]
    public ?string $deletedAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   role: string,
     *   isSandbox: bool,
     *   status: value-of<PostV1AccountMeResponseCompaniesItemStatus>,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   deletedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->role = $values['role'];
        $this->isSandbox = $values['isSandbox'];
        $this->status = $values['status'];
        $this->deletedAt = $values['deletedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
