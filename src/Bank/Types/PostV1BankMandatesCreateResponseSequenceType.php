<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCreateResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
