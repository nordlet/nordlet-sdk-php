<?php

namespace Nordlet\Ledger\Types;

enum JournalTemplatesListLedgerResponseRowsItemLinesItemSide: string
{
    case Debit = "debit";
    case Credit = "credit";
}
