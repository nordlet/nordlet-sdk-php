<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CaptureInboundEmailRequestAttachmentsItem extends JsonSerializableType
{
    /**
     * @var ?string $postmarkName
     */
    #[JsonProperty('Name')]
    public ?string $postmarkName;

    /**
     * @var ?string $postmarkContent
     */
    #[JsonProperty('Content')]
    public ?string $postmarkContent;

    /**
     * @var ?string $postmarkContentType
     */
    #[JsonProperty('ContentType')]
    public ?string $postmarkContentType;

    /**
     * @var ?string $fileName
     */
    #[JsonProperty('fileName')]
    public ?string $fileName;

    /**
     * @var ?string $mimeType
     */
    #[JsonProperty('mimeType')]
    public ?string $mimeType;

    /**
     * @var ?string $content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @param array{
     *   postmarkName?: ?string,
     *   postmarkContent?: ?string,
     *   postmarkContentType?: ?string,
     *   fileName?: ?string,
     *   mimeType?: ?string,
     *   content?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->postmarkName = $values['postmarkName'] ?? null;
        $this->postmarkContent = $values['postmarkContent'] ?? null;
        $this->postmarkContentType = $values['postmarkContentType'] ?? null;
        $this->fileName = $values['fileName'] ?? null;
        $this->mimeType = $values['mimeType'] ?? null;
        $this->content = $values['content'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
