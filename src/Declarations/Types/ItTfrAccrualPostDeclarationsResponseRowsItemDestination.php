<?php

namespace Nordlet\Declarations\Types;

enum ItTfrAccrualPostDeclarationsResponseRowsItemDestination: string
{
    case Azienda = "azienda";
    case FondoTesoreria = "fondo-tesoreria";
    case PrevidenzaComplementare = "previdenza-complementare";
}
