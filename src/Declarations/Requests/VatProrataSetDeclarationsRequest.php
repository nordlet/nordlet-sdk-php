<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatProrataSetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var string $percent
     */
    #[JsonProperty('percent')]
    public string $percent;

    /**
     * @param array{
     *   fiscalYear: int,
     *   percent: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fiscalYear = $values['fiscalYear'];
        $this->percent = $values['percent'];
    }
}
