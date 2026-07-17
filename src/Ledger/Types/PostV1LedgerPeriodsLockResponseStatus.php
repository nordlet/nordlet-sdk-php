<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerPeriodsLockResponseStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
