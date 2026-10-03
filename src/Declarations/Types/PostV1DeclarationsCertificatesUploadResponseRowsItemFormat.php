<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsCertificatesUploadResponseRowsItemFormat: string
{
    case Pem = "pem";
    case PemKey = "pem-key";
    case Pfx = "pfx";
}
