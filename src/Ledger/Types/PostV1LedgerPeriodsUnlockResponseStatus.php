<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerPeriodsUnlockResponseStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
