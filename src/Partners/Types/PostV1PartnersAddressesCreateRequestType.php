<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersAddressesCreateRequestType: string
{
    case Billing = "billing";
    case Shipping = "shipping";
    case Registered = "registered";
    case Other = "other";
}
