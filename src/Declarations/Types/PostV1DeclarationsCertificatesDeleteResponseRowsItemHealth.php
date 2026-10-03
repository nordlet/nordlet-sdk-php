<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsCertificatesDeleteResponseRowsItemHealth: string
{
    case Ok = "ok";
    case Expiring = "expiring";
    case Expired = "expired";
    case Unknown = "unknown";
}
