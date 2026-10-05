<?php

namespace Nordlet\Ledger\Types;

enum OwnersCreateLedgerResponsePartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
