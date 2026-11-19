<?php

namespace Nordlet\Bank\Types;

enum MandatesCancelBankResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
