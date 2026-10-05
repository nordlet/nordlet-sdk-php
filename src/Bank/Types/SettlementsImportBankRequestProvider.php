<?php

namespace Nordlet\Bank\Types;

enum SettlementsImportBankRequestProvider: string
{
    case Stripe = "stripe";
}
