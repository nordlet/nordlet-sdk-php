<?php

namespace Nordlet\Bank\Types;

enum ReconciliationGetBankResponseStatementBalanceSource: string
{
    case Request = "request";
    case Statement = "statement";
}
