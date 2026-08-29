<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCancelResponseScheme: string
{
    case Core = "CORE";
    case B2B = "B2B";
}
