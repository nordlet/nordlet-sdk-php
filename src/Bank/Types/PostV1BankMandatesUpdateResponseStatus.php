<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesUpdateResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
