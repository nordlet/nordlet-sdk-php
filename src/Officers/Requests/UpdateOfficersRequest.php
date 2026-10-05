<?php

namespace Nordlet\Officers\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Officers\Types\UpdateOfficersRequestRole;
use DateTime;
use Nordlet\Core\Types\Date;

class UpdateOfficersRequest extends JsonSerializableType
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
     * @var value-of<UpdateOfficersRequestRole> $role
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
     * @var ?DateTime $appointedOn
     */
    #[JsonProperty('appointedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $appointedOn;

    /**
     * @var ?string $powerNotary
     */
    #[JsonProperty('powerNotary')]
    public ?string $powerNotary;

    /**
     * @var ?DateTime $resignedOn
     */
    #[JsonProperty('resignedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $resignedOn;

    /**
     * @var ?bool $signsAccounts
     */
    #[JsonProperty('signsAccounts')]
    public ?bool $signsAccounts;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   role: value-of<UpdateOfficersRequestRole>,
     *   personalCode?: ?string,
     *   birthDate?: ?DateTime,
     *   appointedOn?: ?DateTime,
     *   powerNotary?: ?string,
     *   resignedOn?: ?DateTime,
     *   signsAccounts?: ?bool,
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
        $this->signsAccounts = $values['signsAccounts'] ?? null;
    }
}
