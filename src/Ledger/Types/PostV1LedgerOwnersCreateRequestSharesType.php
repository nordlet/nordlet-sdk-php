<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerOwnersCreateRequestSharesType: string
{
    case V = "V";
    case Pr = "PR";
    case Pp = "PP";
    case Prv = "PRV";
}
