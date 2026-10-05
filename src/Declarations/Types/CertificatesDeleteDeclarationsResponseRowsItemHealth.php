<?php

namespace Nordlet\Declarations\Types;

enum CertificatesDeleteDeclarationsResponseRowsItemHealth: string
{
    case Ok = "ok";
    case Expiring = "expiring";
    case Expired = "expired";
    case Unknown = "unknown";
}
