<?php

namespace Nordlet\Officers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ListOfficersResponseRowsItem extends JsonSerializableType
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
     * @var value-of<ListOfficersResponseRowsItemRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?string $personalCode
     */
    #[JsonProperty('personalCode')]
    public ?string $personalCode;

    /**
     * @var ?DateTime $birthDate
     */
    #[JsonProperty('birthDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $birthDate;

    /**
     * @var ?string $appointedOn
     */
    #[JsonProperty('appointedOn')]
    public ?string $appointedOn;

    /**
     * @var ?string $powerNotary
     */
    #[JsonProperty('powerNotary')]
    public ?string $powerNotary;

    /**
     * @var ?string $resignedOn
     */
    #[JsonProperty('resignedOn')]
    public ?string $resignedOn;

    /**
     * @var bool $signsAccounts
     */
    #[JsonProperty('signsAccounts')]
    public bool $signsAccounts;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   role: value-of<ListOfficersResponseRowsItemRole>,
     *   signsAccounts: bool,
     *   personalCode?: ?string,
     *   birthDate?: ?DateTime,
     *   appointedOn?: ?string,
     *   powerNotary?: ?string,
     *   resignedOn?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->role = $values['role'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->birthDate = $values['birthDate'] ?? null;
        $this->appointedOn = $values['appointedOn'] ?? null;
        $this->powerNotary = $values['powerNotary'] ?? null;
        $this->resignedOn = $values['resignedOn'] ?? null;
        $this->signsAccounts = $values['signsAccounts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
