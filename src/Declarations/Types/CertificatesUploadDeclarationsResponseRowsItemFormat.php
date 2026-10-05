<?php

namespace Nordlet\Declarations\Types;

enum CertificatesUploadDeclarationsResponseRowsItemFormat: string
{
    case Pem = "pem";
    case PemKey = "pem-key";
    case Pfx = "pfx";
}
