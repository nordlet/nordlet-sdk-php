<?php

namespace Nordlet\Bank\Types;

enum MandatesUpdateBankResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
