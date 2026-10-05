<?php

namespace Nordlet\Declarations\Types;

enum CertificatesListDeclarationsResponseRowsItemFormat: string
{
    case Pem = "pem";
    case PemKey = "pem-key";
    case Pfx = "pfx";
}
