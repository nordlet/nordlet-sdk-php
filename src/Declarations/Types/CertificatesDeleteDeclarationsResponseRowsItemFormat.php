<?php

namespace Nordlet\Declarations\Types;

enum CertificatesDeleteDeclarationsResponseRowsItemFormat: string
{
    case Pem = "pem";
    case PemKey = "pem-key";
    case Pfx = "pfx";
}
