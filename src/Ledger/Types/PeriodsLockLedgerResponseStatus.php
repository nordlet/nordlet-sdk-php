<?php

namespace Nordlet\Ledger\Types;

enum PeriodsLockLedgerResponseStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
