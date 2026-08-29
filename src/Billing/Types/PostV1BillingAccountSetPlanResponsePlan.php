<?php

namespace Nordlet\Billing\Types;

enum PostV1BillingAccountSetPlanResponsePlan: string
{
    case Starter = "starter";
    case Business = "business";
    case Scale = "scale";
}
