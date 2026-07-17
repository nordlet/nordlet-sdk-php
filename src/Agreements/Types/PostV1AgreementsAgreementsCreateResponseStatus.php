<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsCreateResponseStatus: string
{
    case Draft = "draft";
    case Active = "active";
    case Expired = "expired";
    case Terminated = "terminated";
}
