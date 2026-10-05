<?php

namespace Nordlet\Bank\Types;

enum MandatesCancelBankResponseScheme: string
{
    case Core = "CORE";
    case B2B = "B2B";
}
