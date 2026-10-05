<?php

namespace Nordlet\Ledger\Types;

enum OwnersCreateLedgerRequestSharesType: string
{
    case V = "V";
    case Pr = "PR";
    case Pp = "PP";
    case Prv = "PRV";
}
