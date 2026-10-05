<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AgreementsGenerateInvoiceAgreementsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $asOfDate
     */
    #[JsonProperty('asOfDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $asOfDate;

    /**
     * @param array{
     *   id: string,
     *   asOfDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->asOfDate = $values['asOfDate'] ?? null;
    }
}
