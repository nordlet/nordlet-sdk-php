<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class InvoicesRegisterPurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $registrationDate
     */
    #[JsonProperty('registrationDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $registrationDate;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @param array{
     *   id: string,
     *   registrationDate?: ?DateTime,
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->registrationDate = $values['registrationDate'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
    }
}
