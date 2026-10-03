<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsCertificatesListResponseRowsItemFormat: string
{
    case Pem = "pem";
    case PemKey = "pem-key";
    case Pfx = "pfx";
}
