<?php

namespace Nordlet\Ledger\Types;

enum OwnersListLedgerResponseRowsItemPartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
