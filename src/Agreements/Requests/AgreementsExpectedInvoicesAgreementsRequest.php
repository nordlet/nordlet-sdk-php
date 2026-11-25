<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AgreementsExpectedInvoicesAgreementsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATE)]
    public ?DateTime $to;

    /**
     * @param array{
     *   id: string,
     *   to?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->to = $values['to'] ?? null;
    }
}
