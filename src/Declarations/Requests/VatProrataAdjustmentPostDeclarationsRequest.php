<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatProrataAdjustmentPostDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $definitivePercent
     */
    #[JsonProperty('definitivePercent')]
    public ?string $definitivePercent;

    /**
     * @param array{
     *   fiscalYear: int,
     *   accountCode: string,
     *   definitivePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fiscalYear = $values['fiscalYear'];
        $this->accountCode = $values['accountCode'];
        $this->definitivePercent = $values['definitivePercent'] ?? null;
    }
}
