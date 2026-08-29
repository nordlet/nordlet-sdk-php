<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCreateRequestSequenceType: string
{
    case Recurrent = "recurrent";
    case OneOff = "one_off";
}
