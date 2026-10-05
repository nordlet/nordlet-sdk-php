<?php

namespace Nordlet\Ledger\Types;

enum OwnersUpdateLedgerRequestSharesType: string
{
    case V = "V";
    case Pr = "PR";
    case Pp = "PP";
    case Prv = "PRV";
}
