<?php

namespace Nordlet\Partners\Types;

enum AddressesUpdatePartnersRequestType: string
{
    case Billing = "billing";
    case Shipping = "shipping";
    case Registered = "registered";
    case Other = "other";
}
