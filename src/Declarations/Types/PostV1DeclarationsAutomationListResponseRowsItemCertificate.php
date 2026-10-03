<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAutomationListResponseRowsItemCertificate: string
{
    case Ok = "ok";
    case Expiring = "expiring";
    case Expired = "expired";
    case Unknown = "unknown";
    case Missing = "missing";
    case NotNeeded = "not-needed";
}
