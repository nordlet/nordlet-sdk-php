<?php

namespace Nordlet\Ledger\Types;

enum OwnersUpdateLedgerRequestPartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
