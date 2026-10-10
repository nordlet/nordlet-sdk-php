<?php

namespace Nordlet\PlatformSellers\Types;

enum CreatePlatformSellersResponseActivitiesItemActivity: string
{
    case ImmovableProperty = "immovable_property";
    case PersonalServices = "personal_services";
    case SaleOfGoods = "sale_of_goods";
    case TransportationRental = "transportation_rental";
}
