<?php

namespace Nordlet\Bank\Types;

enum MandatesUpdateBankResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
