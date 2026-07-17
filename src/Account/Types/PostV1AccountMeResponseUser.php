<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountMeResponseUser extends JsonSerializableType
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
     * @var bool $isSuperAdmin
     */
    #[JsonProperty('isSuperAdmin')]
    public bool $isSuperAdmin;

    /**
     * @param array{
     *   id: string,
     *   email: string,
     *   locale: string,
     *   plan: string,
     *   isSuperAdmin: bool,
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
        $this->isSuperAdmin = $values['isSuperAdmin'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
