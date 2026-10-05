<?php

namespace Nordlet\Agreements\Types;

enum AgreementsCreateAgreementsResponseStatus: string
{
    case Draft = "draft";
    case Active = "active";
    case Expired = "expired";
    case Terminated = "terminated";
}
