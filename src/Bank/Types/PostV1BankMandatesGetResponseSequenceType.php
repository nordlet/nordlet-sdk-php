<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesGetResponseSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
