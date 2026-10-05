<?php

namespace Nordlet\Ledger\Types;

enum OwnersUpdateLedgerResponsePartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
