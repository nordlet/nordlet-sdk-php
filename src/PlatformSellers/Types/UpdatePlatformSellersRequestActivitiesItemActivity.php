<?php

namespace Nordlet\PlatformSellers\Types;

enum UpdatePlatformSellersRequestActivitiesItemActivity: string
{
    case ImmovableProperty = "immovable_property";
    case PersonalServices = "personal_services";
    case SaleOfGoods = "sale_of_goods";
    case TransportationRental = "transportation_rental";
}
