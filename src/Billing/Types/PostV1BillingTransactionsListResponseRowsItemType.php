<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingTransactionsListResponseRowsItemType: string
{
    case TrialGrant = "trial_grant";
    case Topup = "topup";
    case Usage = "usage";
    case Activation = "activation";
    case Adjustment = "adjustment";
}
