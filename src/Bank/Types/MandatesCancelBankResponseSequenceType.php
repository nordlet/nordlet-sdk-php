<?php

namespace Nordlet\Bank\Types;

enum MandatesCancelBankResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
