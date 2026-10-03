<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerOwnersCreateResponsePartnerLiability: string
{
    case General = "general";
    case Limited = "limited";
}
