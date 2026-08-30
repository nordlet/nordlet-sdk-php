<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountExportResponseUser extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $locale
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var string $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   email: string,
     *   locale: string,
     *   plan: string,
     *   createdAt: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
        $this->locale = $values['locale'];
        $this->plan = $values['plan'];
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
