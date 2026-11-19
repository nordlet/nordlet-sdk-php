<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
