<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsConfigsUpdateResponseFieldsItemKind: string
{
    case Text = "text";
    case Secret = "secret";
    case Select = "select";
    case Url = "url";
    case Certificate = "certificate";
}
