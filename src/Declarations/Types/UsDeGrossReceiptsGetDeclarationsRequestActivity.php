<?php

namespace Nordlet\Declarations\Types;

enum UsDeGrossReceiptsGetDeclarationsRequestActivity: string
{
    case Services = "services";
    case Contractor = "contractor";
    case Manufacturer = "manufacturer";
    case CleanEnergyDeviceManufacturer = "clean-energy-device-manufacturer";
    case AutomobileManufacturer = "automobile-manufacturer";
    case Wholesaler = "wholesaler";
    case FoodProcessor = "food-processor";
    case CommercialFeedDealer = "commercial-feed-dealer";
    case Retailer = "retailer";
    case RestaurantRetailer = "restaurant-retailer";
    case FarmMachineryRetailer = "farm-machinery-retailer";
    case GrocerySupermarketRetailer = "grocery-supermarket-retailer";
}
