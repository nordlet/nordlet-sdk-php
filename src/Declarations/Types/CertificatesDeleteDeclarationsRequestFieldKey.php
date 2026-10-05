<?php

namespace Nordlet\Declarations\Types;

enum CertificatesDeleteDeclarationsRequestFieldKey: string
{
    case Certificate = "certificate";
    case PrivateKey = "privateKey";
}
