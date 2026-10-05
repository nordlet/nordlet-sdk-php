<?php

namespace Nordlet\Ledger\Types;

enum OwnersCreateLedgerRequestPartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
