<?php

namespace Nordlet\Ledger\Types;

enum PeriodsListLedgerResponseRowsItemStatus: string
{
    case Open = "open";
    case Locked = "locked";
}
