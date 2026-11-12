<?php

namespace Nordlet\Bank\Types;

enum ReconciliationGetBankResponseUnbookedLinesItemStatus: string
{
    case New_ = "new";
    case Matched = "matched";
    case Ignored = "ignored";
}
