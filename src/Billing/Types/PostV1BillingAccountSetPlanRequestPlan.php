<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingAccountSetPlanRequestPlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
