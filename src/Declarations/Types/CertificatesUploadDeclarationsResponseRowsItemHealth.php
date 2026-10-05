<?php

namespace Nordlet\Declarations\Types;

enum CertificatesUploadDeclarationsResponseRowsItemHealth: string
{
    case Ok = "ok";
    case Expiring = "expiring";
    case Expired = "expired";
    case Unknown = "unknown";
}
