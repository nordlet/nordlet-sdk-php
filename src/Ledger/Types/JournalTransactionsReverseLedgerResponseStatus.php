<?php

namespace Nordlet\Ledger\Types;

enum JournalTransactionsReverseLedgerResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
