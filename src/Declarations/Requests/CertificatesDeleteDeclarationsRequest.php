<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\CertificatesDeleteDeclarationsRequestFieldKey;

class CertificatesDeleteDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var value-of<CertificatesDeleteDeclarationsRequestFieldKey> $fieldKey
     */
    #[JsonProperty('fieldKey')]
    public string $fieldKey;

    /**
     * @param array{
     *   system: string,
     *   fieldKey: value-of<CertificatesDeleteDeclarationsRequestFieldKey>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->system = $values['system'];
        $this->fieldKey = $values['fieldKey'];
    }
}
