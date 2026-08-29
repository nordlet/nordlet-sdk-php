<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsResolveResponseStatus: string
{
    case Open = "open";
    case Resolved = "resolved";
}
