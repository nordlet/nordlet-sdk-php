<?php

namespace Nordlet\Bank\Types;

enum MandatesCreateBankResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
