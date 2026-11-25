<?php

namespace Nordlet\Ledger\Types;

enum JournalTemplatesCreateLedgerResponseLinesItemSide: string
{
    case Debit = "debit";
    case Credit = "credit";
}
