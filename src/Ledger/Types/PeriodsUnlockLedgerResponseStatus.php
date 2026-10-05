<?php

namespace Nordlet\Ledger\Types;

enum PeriodsUnlockLedgerResponseStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
