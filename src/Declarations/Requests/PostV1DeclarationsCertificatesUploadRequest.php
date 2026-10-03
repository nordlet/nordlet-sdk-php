<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsCertificatesUploadRequest extends JsonSerializableType
{
    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $content Base64-encoded PEM or PKCS#12 file
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var ?string $passphrase
     */
    #[JsonProperty('passphrase')]
    public ?string $passphrase;

    /**
     * @param array{
     *   system: string,
     *   fileName: string,
     *   content: string,
     *   passphrase?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->system = $values['system'];
        $this->fileName = $values['fileName'];
        $this->content = $values['content'];
        $this->passphrase = $values['passphrase'] ?? null;
    }
}
