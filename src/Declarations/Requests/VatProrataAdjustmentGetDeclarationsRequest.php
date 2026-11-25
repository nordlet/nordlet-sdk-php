<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatProrataAdjustmentGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var ?string $definitivePercent
     */
    #[JsonProperty('definitivePercent')]
    public ?string $definitivePercent;

    /**
     * @param array{
     *   fiscalYear: int,
     *   definitivePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fiscalYear = $values['fiscalYear'];
        $this->definitivePercent = $values['definitivePercent'] ?? null;
    }
}
