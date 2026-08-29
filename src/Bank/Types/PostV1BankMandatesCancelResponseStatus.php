<?php

namespace Nordlet\Bank\Types;

enum PostV1BankMandatesCancelResponseStatus: string
{
    case Active = "active";
    case Cancelled = "cancelled";
    case Completed = "completed";
}
