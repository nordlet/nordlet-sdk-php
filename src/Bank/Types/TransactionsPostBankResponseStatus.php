<?php

namespace Nordlet\Bank\Types;

enum TransactionsPostBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
    case Ignored = "ignored";
}
