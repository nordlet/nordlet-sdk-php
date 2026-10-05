<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DevicesCreatePosRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $serialNumber
     */
    #[JsonProperty('serialNumber')]
    public string $serialNumber;

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
     *   name: string,
     *   serialNumber: string,
     *   model?: ?string,
     *   registrationNumber?: ?string,
     *   address?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->serialNumber = $values['serialNumber'];
        $this->model = $values['model'] ?? null;
        $this->registrationNumber = $values['registrationNumber'] ?? null;
        $this->address = $values['address'] ?? null;
    }
}
