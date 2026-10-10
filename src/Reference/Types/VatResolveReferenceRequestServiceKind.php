<?php

namespace Nordlet\Reference\Types;

enum VatResolveReferenceRequestServiceKind: string
{
    case ShortTermAccommodation = "short_term_accommodation";
    case PassengerRoadTransport = "passenger_road_transport";
}
