<?php

namespace Nordlet\Bank\Types;

enum MandatesGetBankResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
