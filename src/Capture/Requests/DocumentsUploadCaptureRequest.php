<?php

namespace Nordlet\Capture\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DocumentsUploadCaptureRequest extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $mimeType
     */
    #[JsonProperty('mimeType')]
    public string $mimeType;

    /**
     * @var string $content Base64-encoded scan, photo or PDF of the supplier document
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   fileName: string,
     *   mimeType: string,
     *   content: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->content = $values['content'];
    }
}
