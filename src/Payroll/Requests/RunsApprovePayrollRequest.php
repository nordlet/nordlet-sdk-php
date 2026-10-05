<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RunsApprovePayrollRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $wageAccountCode
     */
    #[JsonProperty('wageAccountCode')]
    public ?string $wageAccountCode;

    /**
     * @var ?string $employerAccountCode
     */
    #[JsonProperty('employerAccountCode')]
    public ?string $employerAccountCode;

    /**
     * @var ?string $payableAccountCode
     */
    #[JsonProperty('payableAccountCode')]
    public ?string $payableAccountCode;

    /**
     * @var ?string $gpmAccountCode
     */
    #[JsonProperty('gpmAccountCode')]
    public ?string $gpmAccountCode;

    /**
     * @var ?string $sodraAccountCode
     */
    #[JsonProperty('sodraAccountCode')]
    public ?string $sodraAccountCode;

    /**
     * @var ?string $employerSocialAccountCode
     */
    #[JsonProperty('employerSocialAccountCode')]
    public ?string $employerSocialAccountCode;

    /**
     * @var ?string $deductionAccountCode
     */
    #[JsonProperty('deductionAccountCode')]
    public ?string $deductionAccountCode;

    /**
     * @param array{
     *   id: string,
     *   wageAccountCode?: ?string,
     *   employerAccountCode?: ?string,
     *   payableAccountCode?: ?string,
     *   gpmAccountCode?: ?string,
     *   sodraAccountCode?: ?string,
     *   employerSocialAccountCode?: ?string,
     *   deductionAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->wageAccountCode = $values['wageAccountCode'] ?? null;
        $this->employerAccountCode = $values['employerAccountCode'] ?? null;
        $this->payableAccountCode = $values['payableAccountCode'] ?? null;
        $this->gpmAccountCode = $values['gpmAccountCode'] ?? null;
        $this->sodraAccountCode = $values['sodraAccountCode'] ?? null;
        $this->employerSocialAccountCode = $values['employerSocialAccountCode'] ?? null;
        $this->deductionAccountCode = $values['deductionAccountCode'] ?? null;
    }
}
