<?php

namespace Nordlet\Bank\Types;

enum TransactionsIgnoreBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
    case Ignored = "ignored";
}
