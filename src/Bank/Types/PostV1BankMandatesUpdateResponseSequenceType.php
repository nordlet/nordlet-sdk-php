<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesUpdateResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
