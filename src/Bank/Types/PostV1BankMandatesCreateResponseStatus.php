<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCreateResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
