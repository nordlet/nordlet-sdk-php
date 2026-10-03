<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerOwnersUpdateResponsePartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
