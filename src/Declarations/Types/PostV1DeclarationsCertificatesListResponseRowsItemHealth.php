<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsCertificatesListResponseRowsItemHealth: string
{
    case Ok = "ok";
    case Expiring = "expiring";
    case Expired = "expired";
    case Unknown = "unknown";
}
