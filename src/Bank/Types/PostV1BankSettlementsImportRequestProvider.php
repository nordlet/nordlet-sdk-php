<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsImportRequestProvider: string
{
    case Stripe = "stripe";
}
