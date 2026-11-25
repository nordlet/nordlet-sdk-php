<?php

namespace Nordlet\Ledger\Types;

enum JournalTemplatesPostLedgerResponseStatus: string
{
    case Draft = "draft";
    case Posted = "posted";
}
