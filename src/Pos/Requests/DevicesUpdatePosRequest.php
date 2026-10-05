<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DevicesUpdatePosRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $serialNumber
     */
    #[JsonProperty('serialNumber')]
    public ?string $serialNumber;

    /**
     * @var ?string $model
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?string $registrationNumber
     */
    #[JsonProperty('registrationNumber')]
    public ?string $registrationNumber;

    /**
     * @var ?string $address
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @param array{
     *   id: string,
     *   isActive?: ?bool,
     *   name?: ?string,
     *   serialNumber?: ?string,
     *   model?: ?string,
     *   registrationNumber?: ?string,
     *   address?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->isActive = $values['isActive'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->serialNumber = $values['serialNumber'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->registrationNumber = $values['registrationNumber'] ?? null;
        $this->address = $values['address'] ?? null;
    }
}
