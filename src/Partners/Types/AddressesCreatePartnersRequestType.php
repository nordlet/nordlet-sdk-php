<?php

namespace Nordlet\Partners\Types;

enum AddressesCreatePartnersRequestType: string
{
    case Billing = "billing";
    case Shipping = "shipping";
    case Registered = "registered";
    case Other = "other";
}
