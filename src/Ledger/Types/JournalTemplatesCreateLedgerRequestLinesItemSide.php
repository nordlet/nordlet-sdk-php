<?php

namespace Nordlet\Ledger\Types;

enum JournalTemplatesCreateLedgerRequestLinesItemSide: string
{
    case Debit = "debit";
    case Credit = "credit";
}
