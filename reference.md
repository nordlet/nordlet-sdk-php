# Reference
## reference
<details><summary><code>$client-&gt;reference-&gt;exchangeRatesSync($request) -> ?ExchangeRatesSyncReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->exchangeRatesSync(
    new ExchangeRatesSyncReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;exchangeRatesList($request) -> ?ExchangeRatesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->exchangeRatesList(
    new ExchangeRatesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;exchangeRatesSet($request) -> ?ExchangeRatesSetReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->exchangeRatesSet(
    new ExchangeRatesSetReferenceRequest([
        'currency' => 'currency',
        'date' => new DateTime('2026-07-01'),
        'rate' => '121.00000000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$currency:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$rate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;exchangeRatesOverridesList($request) -> ?ExchangeRatesOverridesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->exchangeRatesOverridesList(
    new ExchangeRatesOverridesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;exchangeRatesOverridesDelete($request) -> ?ExchangeRatesOverridesDeleteReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->exchangeRatesOverridesDelete(
    new ExchangeRatesOverridesDeleteReferenceRequest([
        'currency' => 'currency',
        'date' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$currency:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;countriesList($request) -> ?CountriesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->countriesList(
    new CountriesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;ltCountiesList($request) -> ?LtCountiesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->ltCountiesList(
    new LtCountiesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;ltMunicipalitiesList($request) -> ?LtMunicipalitiesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->ltMunicipalitiesList(
    new LtMunicipalitiesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countyCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;ltCitiesList($request) -> ?LtCitiesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->ltCitiesList(
    new LtCitiesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$municipalityCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$q:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;banksList($request) -> ?BanksListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->banksList(
    new BanksListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;banksUpsert($request) -> ?BanksUpsertReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->banksUpsert(
    new BanksUpsertReferenceRequest([
        'countryCode' => 'countryCode',
        'name' => 'name',
        'bic' => 'bic',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;ltRegionsList($request) -> ?LtRegionsListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->ltRegionsList(
    new LtRegionsListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;currenciesList($request) -> ?CurrenciesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->currenciesList(
    new CurrenciesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;vatClassifiersList($request) -> ?VatClassifiersListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->vatClassifiersList(
    new VatClassifiersListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;vatClassifiersUpsert($request) -> ?VatClassifiersUpsertReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->vatClassifiersUpsert(
    new VatClassifiersUpsertReferenceRequest([
        'rows' => [
            new VatClassifiersUpsertReferenceRequestRowsItem([
                'code' => 'code',
                'name' => 'name',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rows:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;euVatRatesList($request) -> ?EuVatRatesListReferenceResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Effective EU VAT rate mapping for this company: EC TEDB defaults, replaced per country by any company overrides. Verify the mapping fits the goods and services you sell before relying on it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->euVatRatesList(
    new EuVatRatesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;euVatRatesSetOverrides($request) -> ?EuVatRatesSetOverridesReferenceResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replace the VAT rate mapping this company uses for one EU country. Pass an empty rates array to drop the overrides and return to the TEDB defaults. Overrides feed rate suggestions (vat/resolve) and OSS/IOSS return rate classification.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->euVatRatesSetOverrides(
    new EuVatRatesSetOverridesReferenceRequest([
        'countryCode' => 'countryCode',
        'rates' => [
            new EuVatRatesSetOverridesReferenceRequestRatesItem([
                'category' => EuVatRatesSetOverridesReferenceRequestRatesItemCategory::Standard->value,
                'ratePercent' => '121.00',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$rates:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;vatResolve($request) -> ?VatResolveReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->vatResolve(
    new VatResolveReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$customerCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$customerIsBusiness:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$supplyType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$belowDistanceSalesThreshold:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$facilitatedByMarketplace:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$actingAsMarketplace:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sellerEstablishedInEu:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$importedConsignmentValueEur:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;cnCodesList($request) -> ?CnCodesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->cnCodesList(
    new CnCodesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;cnCodesUpsert($request) -> ?CnCodesUpsertReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->cnCodesUpsert(
    new CnCodesUpsertReferenceRequest([
        'rows' => [
            new CnCodesUpsertReferenceRequestRowsItem([
                'code' => 'code',
                'name' => 'name',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rows:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;complianceVersionsList($request) -> ?ComplianceVersionsListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->complianceVersionsList(
    new ComplianceVersionsListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;intrastatThresholdsList($request) -> ?IntrastatThresholdsListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->intrastatThresholdsList(
    new IntrastatThresholdsListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;unitsList($request) -> ?UnitsListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->unitsList(
    new UnitsListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;seriesCreate($request) -> ?SeriesCreateReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->seriesCreate(
    new SeriesCreateReferenceRequest([
        'documentType' => 'documentType',
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$startAt:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;seriesList($request) -> ?SeriesListReferenceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->seriesList(
    new SeriesListReferenceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## partners
<details><summary><code>$client-&gt;partners-&gt;addressesCreate($request) -> ?AddressesCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->addressesCreate(
    new AddressesCreatePartnersRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$street:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;addressesUpdate($request) -> ?AddressesUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->addressesUpdate(
    new AddressesUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$street:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;addressesDelete($request) -> ?AddressesDeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->addressesDelete(
    new AddressesDeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;addressesList($request) -> ?AddressesListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->addressesList(
    new AddressesListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;contactsCreate($request) -> ?ContactsCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->contactsCreate(
    new ContactsCreatePartnersRequest([
        'name' => 'name',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;contactsUpdate($request) -> ?ContactsUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->contactsUpdate(
    new ContactsUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;contactsDelete($request) -> ?ContactsDeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->contactsDelete(
    new ContactsDeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;contactsList($request) -> ?ContactsListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->contactsList(
    new ContactsListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;bankAccountsCreate($request) -> ?BankAccountsCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->bankAccountsCreate(
    new BankAccountsCreatePartnersRequest([
        'iban' => 'iban',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$iban:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;bankAccountsUpdate($request) -> ?BankAccountsUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->bankAccountsUpdate(
    new BankAccountsUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;bankAccountsDelete($request) -> ?BankAccountsDeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->bankAccountsDelete(
    new BankAccountsDeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;bankAccountsList($request) -> ?BankAccountsListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->bankAccountsList(
    new BankAccountsListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;filesList($request) -> ?FilesListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->filesList(
    new FilesListPartnersRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;debtRemindersPreview($request) -> ?DebtRemindersPreviewPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->debtRemindersPreview(
    new DebtRemindersPreviewPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;debtRemindersList($request) -> ?DebtRemindersListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->debtRemindersList(
    new DebtRemindersListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;validateVat($request) -> ?ValidateVatPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->validateVat(
    new ValidateVatPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;vatReviewsList($request) -> ?VatReviewsListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->vatReviewsList(
    new VatReviewsListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;vatReviewsResolve($request) -> ?VatReviewsResolvePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->vatReviewsResolve(
    new VatReviewsResolvePartnersRequest([
        'id' => 'id',
        'resolution' => VatReviewsResolvePartnersRequestResolution::ConfirmedValid->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$resolution:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$note:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;create($request) -> ?CreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->create(
    new CreatePartnersRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?CreatePartnersRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?CreatePartnersRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;findOrCreate($request) -> ?FindOrCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->findOrCreate(
    new FindOrCreatePartnersRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?FindOrCreatePartnersRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?FindOrCreatePartnersRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;get($request) -> ?GetPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->get(
    new GetPartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;update($request) -> ?UpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->update(
    new UpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?UpdatePartnersRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?UpdatePartnersRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;delete($request) -> ?DeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->delete(
    new DeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;anonymize($request) -> ?AnonymizePartnersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes birth date, self-employment certificate number, email, phone, address, notes, contacts, addresses and bank accounts, then hides the partner. The name, code and VAT number stay because issued invoices must keep identifying the counterparty for the statutory retention period.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->anonymize(
    new AnonymizePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;list($request) -> ?ListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->list(
    new ListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;groupsCreate($request) -> ?GroupsCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->groupsCreate(
    new GroupsCreatePartnersRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;groupsUpdate($request) -> ?GroupsUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->groupsUpdate(
    new GroupsUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;groupsDelete($request) -> ?GroupsDeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->groupsDelete(
    new GroupsDeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;groupsList($request) -> ?GroupsListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->groupsList(
    new GroupsListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;statusesCreate($request) -> ?StatusesCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->statusesCreate(
    new StatusesCreatePartnersRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;statusesUpdate($request) -> ?StatusesUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->statusesUpdate(
    new StatusesUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;statusesDelete($request) -> ?StatusesDeletePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->statusesDelete(
    new StatusesDeletePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;statusesList($request) -> ?StatusesListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->statusesList(
    new StatusesListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;inquiriesCreate($request) -> ?InquiriesCreatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->inquiriesCreate(
    new InquiriesCreatePartnersRequest([
        'subject' => 'subject',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactEmail:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactPhone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;inquiriesUpdate($request) -> ?InquiriesUpdatePartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->inquiriesUpdate(
    new InquiriesUpdatePartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;inquiriesGet($request) -> ?InquiriesGetPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->inquiriesGet(
    new InquiriesGetPartnersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;inquiriesList($request) -> ?InquiriesListPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->inquiriesList(
    new InquiriesListPartnersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;creditCheck($request) -> ?CreditCheckPartnersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->creditCheck(
    new CreditCheckPartnersRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$additionalAmount:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Leads
<details><summary><code>$client-&gt;leads-&gt;create($request) -> ?CreateLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->create(
    new CreateLeadsRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;get($request) -> ?GetLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->get(
    new GetLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;update($request) -> ?UpdateLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->update(
    new UpdateLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;delete($request) -> ?DeleteLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->delete(
    new DeleteLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;list($request) -> ?ListLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->list(
    new ListLeadsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;notesCreate($request) -> ?NotesCreateLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->notesCreate(
    new NotesCreateLeadsRequest([
        'leadId' => 'leadId',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;notesDelete($request) -> ?NotesDeleteLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->notesDelete(
    new NotesDeleteLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;notesList($request) -> ?NotesListLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->notesList(
    new NotesListLeadsRequest([
        'leadId' => 'leadId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;filesList($request) -> ?FilesListLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->filesList(
    new FilesListLeadsRequest([
        'leadId' => 'leadId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;sourcesCreate($request) -> ?SourcesCreateLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->sourcesCreate(
    new SourcesCreateLeadsRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;sourcesUpdate($request) -> ?SourcesUpdateLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->sourcesUpdate(
    new SourcesUpdateLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;sourcesDelete($request) -> ?SourcesDeleteLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->sourcesDelete(
    new SourcesDeleteLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;sourcesList($request) -> ?SourcesListLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->sourcesList(
    new SourcesListLeadsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;sourcesOptions($request) -> ?SourcesOptionsLeadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->sourcesOptions(
    new SourcesOptionsLeadsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;leads-&gt;convert($request) -> ?ConvertLeadsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Create a customer partner from the lead, move the lead files to the partner, copy the lead notes into the partner notes and mark the lead as converted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->leads->convert(
    new ConvertLeadsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## catalog
<details><summary><code>$client-&gt;catalog-&gt;itemsCreate($request) -> ?ItemsCreateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsCreate(
    new ItemsCreateCatalogRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tracking:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$barcode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$salePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cnCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$originCountry:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$netMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryQtyPerUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$components:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$kindId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$manufacturer:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$grossMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isFreePrice:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isReturnable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$commentRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$priceFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTo:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$minPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maxDiscountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loyaltyPoints:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$department:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$ageRestriction:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$packageQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$taraCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validTo:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$posFlags:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsGet($request) -> ?ItemsGetCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsGet(
    new ItemsGetCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsUpdate($request) -> ?ItemsUpdateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsUpdate(
    new ItemsUpdateCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tracking:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$barcode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$salePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cnCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$originCountry:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$netMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryQtyPerUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$components:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$kindId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$manufacturer:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$grossMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isFreePrice:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isReturnable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$commentRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$priceFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTo:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$minPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maxDiscountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loyaltyPoints:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$department:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$ageRestriction:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$packageQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$taraCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validTo:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$posFlags:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsDelete($request) -> ?ItemsDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsDelete(
    new ItemsDeleteCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsList($request) -> ?ItemsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsList(
    new ItemsListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsFilesList($request) -> ?ItemsFilesListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsFilesList(
    new ItemsFilesListCatalogRequest([
        'itemId' => 'itemId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsKindsCreate($request) -> ?ItemsKindsCreateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsKindsCreate(
    new ItemsKindsCreateCatalogRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$saftType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantityAccounting:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsKindsUpdate($request) -> ?ItemsKindsUpdateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsKindsUpdate(
    new ItemsKindsUpdateCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saftType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantityAccounting:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsKindsDelete($request) -> ?ItemsKindsDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsKindsDelete(
    new ItemsKindsDeleteCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsKindsList($request) -> ?ItemsKindsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsKindsList(
    new ItemsKindsListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;unitsCreate($request) -> ?UnitsCreateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->unitsCreate(
    new UnitsCreateCatalogRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;unitsUpdate($request) -> ?UnitsUpdateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->unitsUpdate(
    new UnitsUpdateCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;unitsDelete($request) -> ?UnitsDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->unitsDelete(
    new UnitsDeleteCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;unitsList($request) -> ?UnitsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->unitsList(
    new UnitsListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;unitsOptions($request) -> ?UnitsOptionsCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->unitsOptions(
    new UnitsOptionsCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemGroupsCreate($request) -> ?ItemGroupsCreateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemGroupsCreate(
    new ItemGroupsCreateCatalogRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemGroupsUpdate($request) -> ?ItemGroupsUpdateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemGroupsUpdate(
    new ItemGroupsUpdateCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemGroupsDelete($request) -> ?ItemGroupsDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemGroupsDelete(
    new ItemGroupsDeleteCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemGroupsList($request) -> ?ItemGroupsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemGroupsList(
    new ItemGroupsListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsSuppliersUpsert($request) -> ?ItemsSuppliersUpsertCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsSuppliersUpsert(
    new ItemsSuppliersUpsertCatalogRequest([
        'itemId' => 'itemId',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsSuppliersList($request) -> ?ItemsSuppliersListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsSuppliersList(
    new ItemsSuppliersListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;itemsSuppliersDelete($request) -> ?ItemsSuppliersDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->itemsSuppliersDelete(
    new ItemsSuppliersDeleteCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsCreate($request) -> ?PriceListsCreateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsCreate(
    new PriceListsCreateCatalogRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsUpdate($request) -> ?PriceListsUpdateCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsUpdate(
    new PriceListsUpdateCatalogRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsList($request) -> ?PriceListsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsList(
    new PriceListsListCatalogRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsItemsSet($request) -> ?PriceListsItemsSetCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsItemsSet(
    new PriceListsItemsSetCatalogRequest([
        'priceListId' => 'priceListId',
        'items' => [
            new PriceListsItemsSetCatalogRequestItemsItem([
                'itemId' => 'itemId',
                'unitPriceExclVat' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsItemsList($request) -> ?PriceListsItemsListCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsItemsList(
    new PriceListsItemsListCatalogRequest([
        'priceListId' => 'priceListId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;priceListsItemsDelete($request) -> ?PriceListsItemsDeleteCatalogResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->priceListsItemsDelete(
    new PriceListsItemsDeleteCatalogRequest([
        'priceListId' => 'priceListId',
        'itemId' => 'itemId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## sales
<details><summary><code>$client-&gt;sales-&gt;invoicesCreate($request) -> ?InvoicesCreateSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesCreate(
    new InvoicesCreateSalesRequest([
        'partnerId' => 'partnerId',
        'lines' => [
            new InvoicesCreateSalesRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceReference:** `?string` — Number of an original invoice issued outside Nordlet; give it with creditedInvoiceDate
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceDate:** `?DateTime` — Issue date of the original invoice issued outside Nordlet
    
</dd>
</dl>

<dl>
<dd>

**$agreementId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatScheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatTransportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatDeliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatRegion:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatNatureOfTransaction:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deemedSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentSeriesId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$seriesLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesGet($request) -> ?InvoicesGetSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesGet(
    new InvoicesGetSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPdf($request) -> ?InvoicesPdfSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPdf(
    new InvoicesPdfSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesSend($request) -> ?InvoicesSendSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesSend(
    new InvoicesSendSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPeppolXml($request) -> ?InvoicesPeppolXmlSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPeppolXml(
    new InvoicesPeppolXmlSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPeppolSend($request) -> ?InvoicesPeppolSendSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPeppolSend(
    new InvoicesPeppolSendSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesEinvoiceXml($request) -> ?InvoicesEinvoiceXmlSalesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render an issued invoice as the national e-invoicing payload for the company country: FatturaPA (IT), KSeF FA(3) (PL) or UBL CIUS-RO (RO). Review the warnings - data the invoice does not carry is flagged, never invented.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesEinvoiceXml(
    new InvoicesEinvoiceXmlSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesEinvoiceSend($request) -> ?InvoicesEinvoiceSendSalesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the national e-invoicing payload and deliver it over the transport configured for the country gateway in compliance settings. With transport=direct the request talks to the tax authority itself - SdICoop over 2-way TLS for Italy, a KSeF session for Poland, ANAF SPV OAuth for Romania - and returns the national number as soon as the channel assigns one. With transport=bridge the payload goes to the configured bridge endpoint (an accredited intermediary or connector) instead.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesEinvoiceSend(
    new InvoicesEinvoiceSendSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesEinvoiceStatus($request) -> ?InvoicesEinvoiceStatusSalesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Ask the national e-invoicing channel what happened to an invoice that was already sent, and store the answer. Italy, Poland and Romania return the outcome only on request - none of them calls back - so this is the way the national number and any rejection reason reach the invoice.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesEinvoiceStatus(
    new InvoicesEinvoiceStatusSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesUpdate($request) -> ?InvoicesUpdateSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesUpdate(
    new InvoicesUpdateSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$agreementId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$vatScheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatTransportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatDeliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatRegion:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatNatureOfTransaction:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deemedSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentSeriesId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$seriesLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesDelete($request) -> ?InvoicesDeleteSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesDelete(
    new InvoicesDeleteSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesIssue($request) -> ?InvoicesIssueSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesIssue(
    new InvoicesIssueSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesLock($request) -> ?InvoicesLockSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesLock(
    new InvoicesLockSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesUnlock($request) -> ?InvoicesUnlockSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesUnlock(
    new InvoicesUnlockSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPaymentLink($request) -> ?InvoicesPaymentLinkSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPaymentLink(
    new InvoicesPaymentLinkSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPaymentSettingsGet($request) -> ?InvoicesPaymentSettingsGetSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPaymentSettingsGet(
    new InvoicesPaymentSettingsGetSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesPaymentSettingsUpdate($request) -> ?InvoicesPaymentSettingsUpdateSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesPaymentSettingsUpdate(
    new InvoicesPaymentSettingsUpdateSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$paymentLinkTemplate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionSchedulesList($request) -> ?RecognitionSchedulesListSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionSchedulesList(
    new RecognitionSchedulesListSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesApplyAdvance($request) -> ?InvoicesApplyAdvanceSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesApplyAdvance(
    new InvoicesApplyAdvanceSalesRequest([
        'advanceId' => 'advanceId',
        'invoiceId' => 'invoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$advanceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;invoicesList($request) -> ?InvoicesListSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->invoicesList(
    new InvoicesListSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsCreate($request) -> ?ActsCreateSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsCreate(
    new ActsCreateSalesRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsUpdate($request) -> ?ActsUpdateSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsUpdate(
    new ActsUpdateSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsIssue($request) -> ?ActsIssueSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsIssue(
    new ActsIssueSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsCancel($request) -> ?ActsCancelSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsCancel(
    new ActsCancelSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsGet($request) -> ?ActsGetSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsGet(
    new ActsGetSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsList($request) -> ?ActsListSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsList(
    new ActsListSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;actsPdf($request) -> ?ActsPdfSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->actsPdf(
    new ActsPdfSalesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionCompute($request) -> ?RecognitionComputeSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionCompute(
    new RecognitionComputeSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionRun($request) -> ?RecognitionRunSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionRun(
    new RecognitionRunSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$postingDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduleIds:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionProgress($request) -> ?RecognitionProgressSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionProgress(
    new RecognitionProgressSalesRequest([
        'invoiceLineId' => 'invoiceLineId',
        'percentComplete' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceLineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$percentComplete:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionModify($request) -> ?RecognitionModifySalesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Apply an IFRS 15 contract modification to a deferred invoice line. Prospective: cancel the pending schedule and respread the unrecognized remainder over the new terms. Cumulative catch-up (ratable only): recompute revenue as if the new terms applied from the start and post the difference immediately.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionModify(
    new RecognitionModifySalesRequest([
        'invoiceLineId' => 'invoiceLineId',
        'approach' => RecognitionModifySalesRequestApproach::Prospective->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceLineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$approach:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$newEndDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$newMilestones:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionRunsList($request) -> ?RecognitionRunsListSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionRunsList(
    new RecognitionRunsListSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;recognitionSummary($request) -> ?RecognitionSummarySalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->recognitionSummary(
    new RecognitionSummarySalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;refundLiabilityList($request) -> ?RefundLiabilityListSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->refundLiabilityList(
    new RefundLiabilityListSalesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;refundLiabilityTrueUp($request) -> ?RefundLiabilityTrueUpSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->refundLiabilityTrueUp(
    new RefundLiabilityTrueUpSalesRequest([
        'invoiceId' => 'invoiceId',
        'estimatedTotal' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedTotal:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## OperationTypes
<details><summary><code>$client-&gt;operationTypes-&gt;create($request) -> ?CreateOperationTypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->operationTypes->create(
    new CreateOperationTypesRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debitAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incomeAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchase:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isWriteOff:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isInternalMovement:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchaseReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSalesReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isConsignment:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isProduction:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetIn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetOut:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isCashRegisterSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInVatRegister:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInSaft:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;operationTypes-&gt;update($request) -> ?UpdateOperationTypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->operationTypes->update(
    new UpdateOperationTypesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debitAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incomeAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchase:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isWriteOff:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isInternalMovement:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchaseReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSalesReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isConsignment:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isProduction:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetIn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetOut:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isCashRegisterSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInVatRegister:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInSaft:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;operationTypes-&gt;get($request) -> ?GetOperationTypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->operationTypes->get(
    new GetOperationTypesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;operationTypes-&gt;delete($request) -> ?DeleteOperationTypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->operationTypes->delete(
    new DeleteOperationTypesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;operationTypes-&gt;list($request) -> ?ListOperationTypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->operationTypes->list(
    new ListOperationTypesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## DocumentSeries
<details><summary><code>$client-&gt;documentSeries-&gt;create($request) -> ?CreateDocumentSeriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentSeries->create(
    new CreateDocumentSeriesRequest([
        'prefix' => 'prefix',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$documentType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$numberLength:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$nextNumber:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$allocatedFrom:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$allocatedTo:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$printSeries:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentSeries-&gt;update($request) -> ?UpdateDocumentSeriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentSeries->update(
    new UpdateDocumentSeriesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$numberLength:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$nextNumber:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$allocatedFrom:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$allocatedTo:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$printSeries:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentSeries-&gt;get($request) -> ?GetDocumentSeriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentSeries->get(
    new GetDocumentSeriesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentSeries-&gt;delete($request) -> ?DeleteDocumentSeriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentSeries->delete(
    new DeleteDocumentSeriesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentSeries-&gt;list($request) -> ?ListDocumentSeriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentSeries->list(
    new ListDocumentSeriesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## purchases
<details><summary><code>$client-&gt;purchases-&gt;invoicesCreate($request) -> ?InvoicesCreatePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesCreate(
    new InvoicesCreatePurchasesRequest([
        'partnerId' => 'partnerId',
        'documentNumber' => 'documentNumber',
        'documentDate' => new DateTime('2026-07-01'),
        'lines' => [
            new InvoicesCreatePurchasesRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatTransportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatDeliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatRegion:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatNatureOfTransaction:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$einvoiceNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesGet($request) -> ?InvoicesGetPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesGet(
    new InvoicesGetPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesUpdate($request) -> ?InvoicesUpdatePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesUpdate(
    new InvoicesUpdatePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatTransportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatDeliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatRegion:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$intrastatNatureOfTransaction:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$einvoiceNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesDelete($request) -> ?InvoicesDeletePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesDelete(
    new InvoicesDeletePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesRegister($request) -> ?InvoicesRegisterPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesRegister(
    new InvoicesRegisterPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesList($request) -> ?InvoicesListPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesList(
    new InvoicesListPurchasesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersCreate($request) -> ?OrdersCreatePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersCreate(
    new OrdersCreatePurchasesRequest([
        'partnerId' => 'partnerId',
        'orderDate' => new DateTime('2026-07-01'),
        'lines' => [
            new OrdersCreatePurchasesRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersUpdate($request) -> ?OrdersUpdatePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersUpdate(
    new OrdersUpdatePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersGet($request) -> ?OrdersGetPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersGet(
    new OrdersGetPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersList($request) -> ?OrdersListPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersList(
    new OrdersListPurchasesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersSubmit($request) -> ?OrdersSubmitPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersSubmit(
    new OrdersSubmitPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersApprove($request) -> ?OrdersApprovePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersApprove(
    new OrdersApprovePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersReject($request) -> ?OrdersRejectPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersReject(
    new OrdersRejectPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersCancel($request) -> ?OrdersCancelPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersCancel(
    new OrdersCancelPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersClose($request) -> ?OrdersClosePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersClose(
    new OrdersClosePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;ordersDelete($request) -> ?OrdersDeletePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->ordersDelete(
    new OrdersDeletePurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;receiptsCreate($request) -> ?ReceiptsCreatePurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->receiptsCreate(
    new ReceiptsCreatePurchasesRequest([
        'orderId' => 'orderId',
        'receiptDate' => new DateTime('2026-07-01'),
        'lines' => [
            new ReceiptsCreatePurchasesRequestLinesItem([
                'orderLineId' => 'orderLineId',
                'quantity' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$receiptDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;receiptsGet($request) -> ?ReceiptsGetPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->receiptsGet(
    new ReceiptsGetPurchasesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;receiptsList($request) -> ?ReceiptsListPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->receiptsList(
    new ReceiptsListPurchasesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;invoicesMatch($request) -> ?InvoicesMatchPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->invoicesMatch(
    new InvoicesMatchPurchasesRequest([
        'invoiceId' => 'invoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTolerancePercent:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## capture
<details><summary><code>$client-&gt;capture-&gt;settingsGet($request) -> ?SettingsGetCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->settingsGet(
    new SettingsGetCaptureRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;settingsUpdate($request) -> ?SettingsUpdateCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->settingsUpdate(
    new SettingsUpdateCaptureRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$intakeEnabled:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$captureAutoExtract:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;settingsRegenerateIntake($request) -> ?SettingsRegenerateIntakeCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->settingsRegenerateIntake(
    new SettingsRegenerateIntakeCaptureRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;inboundEmail($request) -> ?InboundEmailCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->inboundEmail(
    new InboundEmailCaptureRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$postmarkTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$toFull:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkSubject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkAttachments:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `string|array|null` 
    
</dd>
</dl>

<dl>
<dd>

**$from:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attachments:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsUpload($request) -> ?DocumentsUploadCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsUpload(
    new DocumentsUploadCaptureRequest([
        'fileName' => 'fileName',
        'mimeType' => 'mimeType',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fileName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$mimeType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Base64-encoded scan, photo or PDF of the supplier document
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsExtract($request) -> ?DocumentsExtractCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsExtract(
    new DocumentsExtractCaptureRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsGet($request) -> ?DocumentsGetCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsGet(
    new DocumentsGetCaptureRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsList($request) -> ?DocumentsListCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsList(
    new DocumentsListCaptureRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsDelete($request) -> ?DocumentsDeleteCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsDelete(
    new DocumentsDeleteCaptureRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;documentsConfirm($request) -> ?DocumentsConfirmCaptureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->documentsConfirm(
    new DocumentsConfirmCaptureRequest([
        'id' => 'id',
        'documentNumber' => 'documentNumber',
        'documentDate' => new DateTime('2026-07-01'),
        'lines' => [
            new DocumentsConfirmCaptureRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$newSupplier:** `?DocumentsConfirmCaptureRequestNewSupplier` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## declarations
<details><summary><code>$client-&gt;declarations-&gt;ltIntrastatCompute($request) -> ?LtIntrastatComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIntrastatCompute(
    new LtIntrastatComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
        'flow' => LtIntrastatComputeDeclarationsRequestFlow::Arrivals->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$flow:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transactionNature:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$regionCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statisticalValueRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$preparationTimeHours:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$preparationTimeMinutes:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltIvazGenerate($request) -> ?LtIvazGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIvazGenerate(
    new LtIvazGenerateDeclarationsRequest([
        'waybillIds' => [
            'waybillIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$waybillIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltIntrastatObligation($request) -> ?LtIntrastatObligationDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIntrastatObligation(
    new LtIntrastatObligationDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltIsafGenerate($request) -> ?LtIsafGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIsafGenerate(
    new LtIsafGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltFr0600Compute($request) -> ?LtFr0600ComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltFr0600Compute(
    new LtFr0600ComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$deductionPercent:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltGpm313Compute($request) -> ?LtGpm313ComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltGpm313Compute(
    new LtGpm313ComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutTiming:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentDay:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltSamCompute($request) -> ?LtSamComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltSamCompute(
    new LtSamComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltSdGenerate($request) -> ?LtSdGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltSdGenerate(
    new LtSdGenerateDeclarationsRequest([
        'type' => LtSdGenerateDeclarationsRequestType::OneSd->value,
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltSaftGenerate($request) -> ?LtSaftGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltSaftGenerate(
    new LtSaftGenerateDeclarationsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltIvazAmend($request) -> ?LtIvazAmendDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIvazAmend(
    new LtIvazAmendDeclarationsRequest([
        'waybillIds' => [
            'waybillIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$waybillIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltIvazCancel($request) -> ?LtIvazCancelDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltIvazCancel(
    new LtIvazCancelDeclarationsRequest([
        'entries' => [
            new LtIvazCancelDeclarationsRequestEntriesItem([
                'waybillId' => 'waybillId',
                'reason' => LtIvazCancelDeclarationsRequestEntriesItemReason::One->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$entries:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltFr0564Compute($request) -> ?LtFr0564ComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltFr0564Compute(
    new LtFr0564ComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltGpm312Compute($request) -> ?LtGpm312ComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltGpm312Compute(
    new LtGpm312ComputeDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutTiming:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltPln204Compute($request) -> ?LtPln204ComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltPln204Compute(
    new LtPln204ComputeDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euOssCompute($request) -> ?EuOssComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euOssCompute(
    new EuOssComputeDeclarationsRequest([
        'year' => 1000000,
        'quarter' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$quarter:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euIossCompute($request) -> ?EuIossComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euIossCompute(
    new EuIossComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euDistanceSalesThresholdGet($request) -> ?EuDistanceSalesThresholdGetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euDistanceSalesThresholdGet(
    new EuDistanceSalesThresholdGetDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euUnionTurnoverGet($request) -> ?EuUnionTurnoverGetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euUnionTurnoverGet(
    new EuUnionTurnoverGetDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euSmeCrossBorderReportCompute($request) -> ?EuSmeCrossBorderReportComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euSmeCrossBorderReportCompute(
    new EuSmeCrossBorderReportComputeDeclarationsRequest([
        'year' => 1000000,
        'quarter' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$quarter:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euSmeThresholdsList($request) -> ?EuSmeThresholdsListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euSmeThresholdsList(
    new EuSmeThresholdsListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euSmeThresholdGet($request) -> ?EuSmeThresholdGetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euSmeThresholdGet(
    new EuSmeThresholdGetDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euVatReturnPacksList($request) -> ?EuVatReturnPacksListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euVatReturnPacksList(
    new EuVatReturnPacksListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;euVatReturnCompute($request) -> ?EuVatReturnComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->euVatReturnCompute(
    new EuVatReturnComputeDeclarationsRequest([
        'countryCode' => 'countryCode',
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plJpkV7MGenerate($request) -> ?PlJpkV7MGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate the Polish JPK_V7M(3) file (VAT declaration with evidence) for a month, per the MF schema in force since February 2026. Amounts must already be in PLN; rows are marked BFK until a KSeF integration supplies invoice numbers. Review the warnings before submitting via e-dokumenty.mf.gov.pl.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plJpkV7MGenerate(
    new PlJpkV7MGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
        'kodUrzedu' => 'kodUrzedu',
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$kodUrzedu:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$celZlozenia:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plVatUeGenerate($request) -> ?PlVatUeGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the rows of the Polish recapitulative statement VAT-UE for a month: section C intra-Community supplies of goods, section D intra-Community acquisitions, section E services taxed where the customer is established. Amounts are full złoty per counterparty. The VAT-UE(5) file itself goes out from the EU sales list deadline in the calendar.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plVatUeGenerate(
    new PlVatUeGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plIntrastatGenerate($request) -> ?PlIntrastatGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the rows of the Polish INTRASTAT declaration for a month, arrivals or dispatches, grouped by CN code, partner country, country of origin, partner VAT number, nature of transaction, transport and delivery terms. Values are whole złoty converted at the invoice rate; credit notes with goods lines are returns (code 21). Goods without a CN code are left out and named in the warnings. The IST message itself goes out from the Intrastat deadline in the calendar.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plIntrastatGenerate(
    new PlIntrastatGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
        'flow' => PlIntrastatGenerateDeclarationsRequestFlow::Arrivals->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$flow:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transactionNature:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plKsefReceivedList($request) -> ?PlKsefReceivedListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

List the invoices KSeF holds for this company as the buyer, for a window of acquisition timestamps. Each row carries the KSeF number and, when the document number matches a registered purchase invoice, the invoice it belongs to.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plKsefReceivedList(
    new PlKsefReceivedListDeclarationsRequest([
        'from' => new DateTime('2024-01-15T09:30:00Z'),
        'to' => new DateTime('2024-01-15T09:30:00Z'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$from:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageOffset:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plKsefReceivedFetch($request) -> ?PlKsefReceivedFetchDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Read one invoice out of KSeF by its national number. With a purchase invoice given, the KSeF number is written onto that invoice, which is what makes the purchase row of JPK_V7M carry NrKSeF instead of the BFK marker.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plKsefReceivedFetch(
    new PlKsefReceivedFetchDeclarationsRequest([
        'ksefNumber' => 'ksefNumber',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ksefNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseInvoiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plKsefReceipt($request) -> ?PlKsefReceiptDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

The UPO for a KSeF session. KSeF issues one receipt per session rather than per invoice, so the session reference number from the send is what identifies it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plKsefReceipt(
    new PlKsefReceiptDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$sessionReferenceNumber:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxAdjustmentsList($request) -> ?TaxAdjustmentsListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

The differences between the accounting result and the taxable profit: non-deductible expenses, income added to or left out of the tax base, extra deductible expenses, donations, losses carried forward, reliefs and tax credits. The annual corporate income tax return is built from them.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxAdjustmentsList(
    new TaxAdjustmentsListDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxAdjustmentsCreate($request) -> ?TaxAdjustmentsCreateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxAdjustmentsCreate(
    new TaxAdjustmentsCreateDeclarationsRequest([
        'year' => 1000000,
        'kind' => TaxAdjustmentsCreateDeclarationsRequestKind::NonDeductible->value,
        'amount' => '121.00',
        'description' => 'description',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxAdjustmentsUpdate($request) -> ?TaxAdjustmentsUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxAdjustmentsUpdate(
    new TaxAdjustmentsUpdateDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxAdjustmentsDelete($request) -> ?TaxAdjustmentsDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxAdjustmentsDelete(
    new TaxAdjustmentsDeleteDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxPaymentsList($request) -> ?TaxPaymentsListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

What the company has paid the administration towards a tax before the return is filed: payments on account, tax withheld at source by others, a final settlement, and a refund received. Returns report these on their own lines, so the amount they ask for is the balance.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxPaymentsList(
    new TaxPaymentsListDeclarationsRequest([
        'tax' => TaxPaymentsListDeclarationsRequestTax::CorporateIncomeTax->value,
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tax:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxPaymentsCreate($request) -> ?TaxPaymentsCreateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxPaymentsCreate(
    new TaxPaymentsCreateDeclarationsRequest([
        'tax' => TaxPaymentsCreateDeclarationsRequestTax::CorporateIncomeTax->value,
        'year' => 1000000,
        'kind' => TaxPaymentsCreateDeclarationsRequestKind::Advance->value,
        'amount' => '121.00',
        'paidOn' => new DateTime('2026-07-01'),
        'description' => 'description',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tax:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$paidOn:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reference:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxPaymentsUpdate($request) -> ?TaxPaymentsUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxPaymentsUpdate(
    new TaxPaymentsUpdateDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$paidOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reference:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;taxPaymentsDelete($request) -> ?TaxPaymentsDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->taxPaymentsDelete(
    new TaxPaymentsDeleteDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsGet($request) -> ?AnnualAccountsGetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Whether the general meeting adopted the annual accounts and on which date, the date the accounts were prepared, and which directors signed them. The annual accounts filed with the trade register are built from these facts.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsGet(
    new AnnualAccountsGetDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsSet($request) -> ?AnnualAccountsSetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsSet(
    new AnnualAccountsSetDeclarationsRequest([
        'year' => 1000000,
        'adopted' => true,
        'dateOfPreparation' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$adopted:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$adoptionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateOfPreparation:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$audited:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$auditReportQualified:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorNotElected:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notesText:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$managementReportText:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorReportText:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorReportDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$resultToReserves:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$resultToLossCompensation:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$resultToRemainder:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsSignaturesCreate($request) -> ?AnnualAccountsSignaturesCreateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsSignaturesCreate(
    new AnnualAccountsSignaturesCreateDeclarationsRequest([
        'year' => 1000000,
        'directorName' => 'directorName',
        'directorType' => AnnualAccountsSignaturesCreateDeclarationsRequestDirectorType::ManagingCurrent->value,
        'signed' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$directorName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$directorType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$signed:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$signedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$signedAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reasonNotSigned:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsSignaturesUpdate($request) -> ?AnnualAccountsSignaturesUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsSignaturesUpdate(
    new AnnualAccountsSignaturesUpdateDeclarationsRequest([
        'id' => 'id',
        'directorName' => 'directorName',
        'directorType' => AnnualAccountsSignaturesUpdateDeclarationsRequestDirectorType::ManagingCurrent->value,
        'signed' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$directorName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$directorType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$signed:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$signedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$signedAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reasonNotSigned:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsSignaturesDelete($request) -> ?AnnualAccountsSignaturesDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsSignaturesDelete(
    new AnnualAccountsSignaturesDeleteDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsDistributionsCreate($request) -> ?AnnualAccountsDistributionsCreateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsDistributionsCreate(
    new AnnualAccountsDistributionsCreateDeclarationsRequest([
        'year' => 1000000,
        'decidedOn' => new DateTime('2026-07-01'),
        'kind' => AnnualAccountsDistributionsCreateDeclarationsRequestKind::Dividend->value,
        'amount' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$decidedOn:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsDistributionsUpdate($request) -> ?AnnualAccountsDistributionsUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsDistributionsUpdate(
    new AnnualAccountsDistributionsUpdateDeclarationsRequest([
        'id' => 'id',
        'decidedOn' => new DateTime('2026-07-01'),
        'kind' => AnnualAccountsDistributionsUpdateDeclarationsRequestKind::Dividend->value,
        'amount' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$decidedOn:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsDistributionsDelete($request) -> ?AnnualAccountsDistributionsDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsDistributionsDelete(
    new AnnualAccountsDistributionsDeleteDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsAttachmentsAdd($request) -> ?AnnualAccountsAttachmentsAddDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Links a file uploaded through files/upload (its storageKey) to the annual accounts of the year as the notes, the management report, the auditor statement, the profit appropriation resolution, the approval certificate, the general data sheet, the full report as a pdf, or another document. Deposits that must carry these documents take them from here.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsAttachmentsAdd(
    new AnnualAccountsAttachmentsAddDeclarationsRequest([
        'year' => 1000000,
        'kind' => AnnualAccountsAttachmentsAddDeclarationsRequestKind::FullReport->value,
        'ref' => 'ref',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$ref:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;annualAccountsAttachmentsDelete($request) -> ?AnnualAccountsAttachmentsDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->annualAccountsAttachmentsDelete(
    new AnnualAccountsAttachmentsDeleteDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;cyTd4Generate($request) -> ?CyTd4GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Compute the company income tax return TD4 of a tax year from the ledger and the recorded tax adjustments: the accounting profit, the add-backs, deductions, capital allowances and losses brought forward, the chargeable income, the corporation tax at the rate of the year and the double tax relief, as the fields the company keys into TAXISnet or Tax For All. The Tax Department publishes no upload layout for the TD4; the XML is a working file.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->cyTd4Generate(
    new CyTd4GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;cyHe32Generate($request) -> ?CyHe32GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the annual return HE32 of a year: the figures the Registrar’s e-filing screens ask for (company number, registered office, made-up-to date, share capital, register of members, directors and secretary, annual general meeting date, the accounts summary), the working file, and the printed form HE32(I) filled in as a PDF for signing and for keying into the Registrar’s system, which takes the return only through its own screens.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->cyHe32Generate(
    new CyHe32GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;deReturnsGenerate($request) -> ?DeReturnsGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build one of the German returns that ELSTER accepts only through a licensed ERiC transmission (E-Bilanz, Körperschaftsteuer, Gewerbesteuer with its Zerlegungserklärung, annual VAT return, Lohnsteuer-Anmeldung, Lohnsteuerbescheinigung) for the company to send through its own ELSTER-capable program. The period is the year, or YYYY-MM for the monthly Lohnsteuer-Anmeldung.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->deReturnsGenerate(
    new DeReturnsGenerateDeclarationsRequest([
        'ruleKey' => DeReturnsGenerateDeclarationsRequestRuleKey::DeEBilanz->value,
        'period' => 'period',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ruleKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$period:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;deReturnFactsGet($request) -> ?DeReturnFactsGetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

The facts of one year that the German annual returns (Körperschaftsteuer, Gewerbesteuer, Umsatzsteuererklärung) need and the ledger does not hold: changes of shareholders, contracts with shareholders, the tax contribution account, loss carry-back, the donation carry-forward, the business premises with the municipalities for the apportionment of the trade tax, the land values or property tax and the participations for the trade tax additions and reductions, the foreign income per country for the Anlage AESt, the date of leaving the small-business scheme and the Anlage UN answers of a company seated abroad. A key that is absent has not been answered.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->deReturnFactsGet(
    new DeReturnFactsGetDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;deReturnFactsSet($request) -> ?DeReturnFactsSetDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replace the facts of one year for the German annual returns. The returns built afterwards read them; a key left out stays unanswered.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->deReturnFactsSet(
    new DeReturnFactsSetDeclarationsRequest([
        'year' => 1000000,
        'facts' => new DeReturnFactsSetDeclarationsRequestFacts([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$facts:** `DeReturnFactsSetDeclarationsRequestFacts` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;deDeuevGenerate($request) -> ?DeDeuevGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the DEÜV notifications of a month (Anmeldung for every start, Abmeldung for every leaving, in December the Jahresmeldung for everyone employed on 31 December) as DSME records with the DBME, DBNA, DBGB and DBAN blocks of Anlage 4 in force from 2026, from the approved payroll runs and the employee record, for the company's own transmission channel.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->deDeuevGenerate(
    new DeDeuevGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;deBeitragsnachweisGenerate($request) -> ?DeBeitragsnachweisGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the monthly contribution statement to the health insurers (Beitragsnachweis) from the payroll run: one fixed-length record BW02 per insurer, in the record layout in force from 2026, ready for the company's own transmission channel.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->deBeitragsnachweisGenerate(
    new DeBeitragsnachweisGenerateDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;dkSelskabsskatGenerate($request) -> ?DkSelskabsskatGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Compute the oplysningsskema for selskaber (selskabsselvangivelsen) of an income year from the ledger and the recorded tax adjustments: accounting result before tax, tax adjustments, losses carried forward, taxable income, the 22 % corporation tax, reliefs and the balance, as the rubrikker the company keys into TastSelv Selskabsskat (DIAS). Skatteforvaltningen publishes no file format for the return; the XML is a working file.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->dkSelskabsskatGenerate(
    new DkSelskabsskatGenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;eeEmploymentRegisterSend($request) -> ?EeEmploymentRegisterSendDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Send one employment register (töötamise register) entry for an employment contract to e-MTA over X-tee: the start of work, or its end with the reason recorded on the contract.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->eeEmploymentRegisterSend(
    new EeEmploymentRegisterSendDeclarationsRequest([
        'contractId' => 'contractId',
        'event' => EeEmploymentRegisterSendDeclarationsRequestEvent::Start->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$contractId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$event:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;esVerifactuDeclaracionResponsable($request) -> ?EsVerifactuDeclaracionResponsableDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Nordlet's declaración responsable for its VERI*FACTU invoicing system (Orden HAC/1177/2024, art. 15), as a PDF and as plain text.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->esVerifactuDeclaracionResponsable(
    new EsVerifactuDeclaracionResponsableDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ieCt1Generate($request) -> ?IeCt1GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the Form CT1 of an accounting year as the ROS version 26 XML and the accompanying financial statements as inline XBRL on the FRS 102 Irish Extension 2026 taxonomy Revenue accepts, both from the ledger, the recorded tax adjustments, the annual accounts record and the officers, for upload through the company’s own ROS account. Says whether the company is above the iXBRL deferral limits (balance sheet total €4.4 million, turnover €8.8 million, 50 employees).
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ieCt1Generate(
    new IeCt1GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ieB1Generate($request) -> ?IeB1GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the working paper for the Form B1 annual return of a financial year — company details, registered office, directors and secretary from Settings → Officers, the members from Settings → Shareholders, the issued share capital and the figures of the financial statements — in the order the CORE screens ask for them. The CRO publishes no file format for the B1, so it is keyed into CORE.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ieB1Generate(
    new IeB1GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;itSdiPurchaseSend($request) -> ?ItSdiPurchaseSendDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the TD16-TD19 integration document for a registered purchase invoice and send it to the Sistema di Interscambio. Since July 2022 a purchase from a supplier established abroad is reported this way instead of the esterometro. The Italian VAT rate to self-assess is a judgement about the supply: pass vatRatePercent unless the purchase lines already carry it, otherwise the request is refused rather than guessed.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->itSdiPurchaseSend(
    new ItSdiPurchaseSendDeclarationsRequest([
        'purchaseInvoiceId' => 'purchaseInvoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$purchaseInvoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tipoDocumento:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;itSdiPurchasePreview($request) -> ?ItSdiPurchasePreviewDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render the TD16-TD19 integration document for a registered purchase invoice without sending it, so the rate and the document type can be checked first.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->itSdiPurchasePreview(
    new ItSdiPurchasePreviewDeclarationsRequest([
        'purchaseInvoiceId' => 'purchaseInvoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$purchaseInvoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tipoDocumento:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltSaftSend($request) -> ?LtSaftSendDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Upload the SAF-T file to i.SAF-T over the iSAFTUploaderService web service and start its processing. The file, the case reference and the status are kept as a declaration submission (submissionId), whose outcome Nordlet then checks with i.SAF-T. The submission itself is confirmed separately, because after confirmation the file can no longer be corrected. A range and data type already sent is sent again only with amend: true.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltSaftSend(
    new LtSaftSendDeclarationsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$confirm:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$amend:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltSdFfdata($request) -> ?LtSdFfdataDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render the Sodra 1-SD or 2-SD notice for the contracts starting or ending in the range as an .ffdata document for EDAS.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltSdFfdata(
    new LtSdFfdataDeclarationsRequest([
        'type' => LtSdFfdataDeclarationsRequestType::OneSd->value,
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$managerFullName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$preparatorDetails:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;ltPln204Ffdata($request) -> ?LtPln204FfdataDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render the annual corporate income tax return PLN204 as an .ffdata document, including the PLN204S and PLN204Z annexes, from the ledger and the tax adjustments recorded for that year.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->ltPln204Ffdata(
    new LtPln204FfdataDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;mtCompanyTaxGenerate($request) -> ?MtCompanyTaxGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Compute the company income tax return and self-assessment of a year of assessment from the ledger and the recorded tax adjustments: the accounting profit before tax, the add-backs and deductions, the approved donations, capital allowances and losses carried forward, the chargeable income, the 35 % charge, the relief against the tax and the allocation of the distributable profit to the five tax accounts. The Malta Tax and Customs Administration issues the return as a personalised spreadsheet to the registered tax practitioner and publishes no layout, so the XML is a working file and the figures are keyed into that spreadsheet.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->mtCompanyTaxGenerate(
    new MtCompanyTaxGenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;mtAnnualReturnGenerate($request) -> ?MtAnnualReturnGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the annual return of a year: the company number, registered office and made-up-to date, the share capital, the register of members, the directors and the company secretary and the accounts summary, as the figures the Malta Business Registry asks for on its own screens, plus the printed Annual Return Form of the Seventh Schedule filled in as a PDF for signing.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->mtAnnualReturnGenerate(
    new MtAnnualReturnGenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plJpkFaGenerate($request) -> ?PlJpkFaGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate JPK_FA(4), the on-demand structure with every sales invoice issued in a period, its VAT bases per rate and one row per invoice line. Filed only when the tax office asks for it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plJpkFaGenerate(
    new PlJpkFaGenerateDeclarationsRequest([
        'dateFrom' => new DateTime('2026-07-01'),
        'dateTo' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$dateFrom:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plJpkKrGenerate($request) -> ?PlJpkKrGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate JPK_KR(1), the on-demand structure with the chart of accounts and its opening balances and turnover, the journal and the double entries behind it. Filed only when the tax office asks for it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plJpkKrGenerate(
    new PlJpkKrGenerateDeclarationsRequest([
        'dateFrom' => new DateTime('2026-07-01'),
        'dateTo' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$dateFrom:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plJpkMagGenerate($request) -> ?PlJpkMagGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate JPK_MAG(2), the on-demand structure with the warehouse documents of one warehouse: goods received from outside (PZ) or internally (PW) and issued to a customer (WZ) or internally (RW). Filed only when the tax office asks for it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plJpkMagGenerate(
    new PlJpkMagGenerateDeclarationsRequest([
        'dateFrom' => new DateTime('2026-07-01'),
        'dateTo' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$dateFrom:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plPit11Generate($request) -> ?PlPit11GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate PIT-11(29) for every person on the payroll of one year: the pay, the deductible costs, the advance withheld and the social and health contributions taken off it. One document per person, because that is how the form is filed.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plPit11Generate(
    new PlPit11GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plCit8Generate($request) -> ?PlCit8GenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate CIT-8(34), the annual corporate income tax return, from the ledger of the year and the recorded tax adjustments. The tax office code and the small-taxpayer setting come from the e-Deklaracje compliance settings, the seat address from the JPK gateway settings. Names the annexes the figures would need, which are not produced.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plCit8Generate(
    new PlCit8GenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plZusDraCompute($request) -> ?PlZusDraComputeDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Compute the monthly ZUS DRA settlement from the payroll run of one month: the pension, disability, sickness, accident and health insurance contributions and the Labour Fund, Solidarity Fund and guaranteed benefits fund charges, each split between the insured person and the payer. The amounts are carried into Płatnik or ePłatnik by hand.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plZusDraCompute(
    new PlZusDraComputeDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plZusDraKedu($request) -> ?PlZusDraKeduDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the KEDU file for one month: the ZUS DRA settlement and one ZUS RCA report per person on the payroll, in the schema kedu_5_4 that Płatnik and ePłatnik import. The payer REGON, short name and declaration deadline code come from the ZUS compliance settings; the insurance title code and working time of each person from the employee record.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plZusDraKedu(
    new PlZusDraKeduDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;plZusDraPdf($request) -> ?PlZusDraPdfDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Fill the published ZUS DRA form for one month and return it as a PDF. The amounts, the payer identity and the deadline code are the same ones the KEDU file carries; blocks the payroll does not hold (paid benefits, bridging pensions, income declaration of a self-paying person) stay empty.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->plZusDraPdf(
    new PlZusDraPdfDeclarationsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;roEtransportBuild($request) -> ?RoEtransportBuildDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the RO e-Transport declaration for an issued waybill: goods with their tariff codes and masses, the commercial partner, the route and the vehicle. The XML follows the ANAF eTransport v2 schema and is kept as a file on the waybill. Anything listed in blockers has to be filled in before /etransport/send will accept it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->roEtransportBuild(
    new RoEtransportBuildDeclarationsRequest([
        'waybillId' => 'waybillId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$waybillId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;roEtransportSubmit($request) -> ?RoEtransportSubmitDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Hand the RO e-Transport declaration for an issued waybill to ANAF under the SPV OAuth token in compliance settings, and return the upload index the UIT is read back with. Answers 422 while any field the ANAF validator requires is still missing.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->roEtransportSubmit(
    new RoEtransportSubmitDeclarationsRequest([
        'waybillId' => 'waybillId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$waybillId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;roEtransportStatus($request) -> ?RoEtransportStatusDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Read the outcome of an e-Transport declaration from ANAF by its upload index, under the SPV OAuth token in compliance settings. Returns the UIT code once the declaration validates.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->roEtransportStatus(
    new RoEtransportStatusDeclarationsRequest([
        'reference' => 'reference',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reference:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;liLohndeklarationGenerate($request) -> ?LiLohndeklarationGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the annual wage declaration (Lohndeklaration) to the AHV-IV-FAK from the approved payroll runs of the year as the CSV that AHVeasy imports under Lohndeklaration → CSV-Import der Lohndaten: one row per employee with the 18 columns of the AHVeasy template, the AHV-liable wage and the ALV wage.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->liLohndeklarationGenerate(
    new LiLohndeklarationGenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;liLohnlistenGenerate($request) -> ?LiLohnlistenGenerateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the annual wage list (Lohnliste) of a Liechtenstein employer from the approved payroll runs of the year as the XLSX file the tax administration's eLohnausweis / eLohnlisten application imports: one row per employee with PEID, name, birth date, address, gross wage, wage tax withheld and the settlement period.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->liLohnlistenGenerate(
    new LiLohnlistenGenerateDeclarationsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;configsList($request) -> ?ConfigsListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->configsList(
    new ConfigsListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;configsUpdate($request) -> ?ConfigsUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->configsUpdate(
    new ConfigsUpdateDeclarationsRequest([
        'system' => 'system',
        'config' => [
            'key' => 'value',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$system:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$config:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;certificatesUpload($request) -> ?CertificatesUploadDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->certificatesUpload(
    new CertificatesUploadDeclarationsRequest([
        'system' => 'system',
        'fileName' => 'fileName',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$system:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fileName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Base64-encoded PEM or PKCS#12 file
    
</dd>
</dl>

<dl>
<dd>

**$passphrase:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;certificatesList($request) -> ?CertificatesListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->certificatesList(
    new CertificatesListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;certificatesDelete($request) -> ?CertificatesDeleteDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->certificatesDelete(
    new CertificatesDeleteDeclarationsRequest([
        'system' => 'system',
        'fieldKey' => CertificatesDeleteDeclarationsRequestFieldKey::Certificate->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$system:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fieldKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;automationList($request) -> ?AutomationListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->automationList(
    new AutomationListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;automationUpdate($request) -> ?AutomationUpdateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->automationUpdate(
    new AutomationUpdateDeclarationsRequest([
        'ruleKey' => 'ruleKey',
        'enabled' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ruleKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$enabled:** `bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;submissionsRetry($request) -> ?SubmissionsRetryDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->submissionsRetry(
    new SubmissionsRetryDeclarationsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;submissionsCreate($request) -> ?SubmissionsCreateDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->submissionsCreate(
    new SubmissionsCreateDeclarationsRequest([
        'obligation' => SubmissionsCreateDeclarationsRequestObligation::LtIsaf->value,
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$obligation:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;submissionsMark($request) -> ?SubmissionsMarkDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->submissionsMark(
    new SubmissionsMarkDeclarationsRequest([
        'id' => 'id',
        'status' => SubmissionsMarkDeclarationsRequestStatus::Submitted->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$message:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;submissionsList($request) -> ?SubmissionsListDeclarationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->submissionsList(
    new SubmissionsListDeclarationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## ledger
<details><summary><code>$client-&gt;ledger-&gt;accountsList($request) -> ?AccountsListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->accountsList(
    new AccountsListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;accountsCreate($request) -> ?AccountsCreateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->accountsCreate(
    new AccountsCreateLedgerRequest([
        'code' => 'code',
        'name' => 'name',
        'type' => AccountsCreateLedgerRequestType::Asset->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPostable:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;accountsUpdate($request) -> ?AccountsUpdateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->accountsUpdate(
    new AccountsUpdateLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPostable:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;accountsApplyTemplate($request) -> ?AccountsApplyTemplateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->accountsApplyTemplate(
    new AccountsApplyTemplateLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;accountsSwitchChart($request) -> ?AccountsSwitchChartLedgerResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replaces the seeded chart with the chart template of the company country (the Romanian general chart for a company registered in Romania, the Lithuanian standard chart otherwise) and switches the posting defaults with it. Answers 409 when the company already uses that chart, has journal entries, holds accounts created by hand, or has settings that name an account the new chart does not have.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->accountsSwitchChart(
    new AccountsSwitchChartLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;periodsList($request) -> ?PeriodsListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->periodsList(
    new PeriodsListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;periodsLock($request) -> ?PeriodsLockLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->periodsLock(
    new PeriodsLockLedgerRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;periodsUnlock($request) -> ?PeriodsUnlockLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->periodsUnlock(
    new PeriodsUnlockLedgerRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;journalTransactionsList($request) -> ?JournalTransactionsListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->journalTransactionsList(
    new JournalTransactionsListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCentersCreate($request) -> ?CostCentersCreateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCentersCreate(
    new CostCentersCreateLedgerRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCentersUpdate($request) -> ?CostCentersUpdateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCentersUpdate(
    new CostCentersUpdateLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCentersList($request) -> ?CostCentersListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCentersList(
    new CostCentersListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCenterGroupsCreate($request) -> ?CostCenterGroupsCreateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCenterGroupsCreate(
    new CostCenterGroupsCreateLedgerRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCenterGroupsUpdate($request) -> ?CostCenterGroupsUpdateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCenterGroupsUpdate(
    new CostCenterGroupsUpdateLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCenterGroupsDelete($request) -> ?CostCenterGroupsDeleteLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCenterGroupsDelete(
    new CostCenterGroupsDeleteLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;costCenterGroupsList($request) -> ?CostCenterGroupsListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->costCenterGroupsList(
    new CostCenterGroupsListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postingRulesList($request) -> ?PostingRulesListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postingRulesList(
    new PostingRulesListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postingRulesUpdate($request) -> ?PostingRulesUpdateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postingRulesUpdate(
    new PostingRulesUpdateLedgerRequest([
        'rules' => [
            new PostingRulesUpdateLedgerRequestRulesItem([
                'key' => PostingRulesUpdateLedgerRequestRulesItemKey::SalesReceivable->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rules:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;ownersCreate($request) -> ?OwnersCreateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->ownersCreate(
    new OwnersCreateLedgerRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$equityAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAcquisitionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$withholdingTaxPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerLiability:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$specialBalanceRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryBalanceRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?OwnersCreateLedgerRequestAddress` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;ownersUpdate($request) -> ?OwnersUpdateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->ownersUpdate(
    new OwnersUpdateLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$equityAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAcquisitionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$withholdingTaxPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerLiability:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$specialBalanceRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryBalanceRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?OwnersUpdateLedgerRequestAddress` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;ownersDelete($request) -> ?OwnersDeleteLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->ownersDelete(
    new OwnersDeleteLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;ownersList($request) -> ?OwnersListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->ownersList(
    new OwnersListLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;journalTransactionsGet($request) -> ?JournalTransactionsGetLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->journalTransactionsGet(
    new JournalTransactionsGetLedgerRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;journalTransactionsCreate($request) -> ?JournalTransactionsCreateLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->journalTransactionsCreate(
    new JournalTransactionsCreateLedgerRequest([
        'date' => new DateTime('2026-07-01'),
        'entries' => [
            new JournalTransactionsCreateLedgerRequestEntriesItem([
                'accountCode' => 'accountCode',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$entries:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;statementRowsSchemes($request) -> ?StatementRowsSchemesLedgerResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

The rows or codes of each return or registry deposit of the company country that are filled from account balances. Accounts fall into a row by the layout defaults for the standard chart of accounts unless mapped under Settings → Statement rows.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->statementRowsSchemes(
    new StatementRowsSchemesLedgerRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;statementRowsList($request) -> ?StatementRowsListLedgerResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->statementRowsList(
    new StatementRowsListLedgerRequest([
        'scheme' => 'scheme',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$scheme:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;statementRowsSet($request) -> ?StatementRowsSetLedgerResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

A mapping on a code prefix covers every account whose code starts with it; the longest matching prefix wins. An empty rowCode removes the mapping so the layout default applies again.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->statementRowsSet(
    new StatementRowsSetLedgerRequest([
        'scheme' => 'scheme',
        'accountCode' => 'accountCode',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$scheme:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$rowCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Officers
<details><summary><code>$client-&gt;officers-&gt;list($request) -> ?ListOfficersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Directors, board members, the company secretary, representatives and liquidators, with their personal identifier, appointment and resignation dates and whether they sign the annual accounts. Annual returns and registry deposits are built from this register.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->officers->list(
    new ListOfficersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;officers-&gt;create($request) -> ?CreateOfficersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->officers->create(
    new CreateOfficersRequest([
        'name' => 'name',
        'role' => CreateOfficersRequestRole::Director->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$appointedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$powerNotary:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$resignedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$signsAccounts:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;officers-&gt;update($request) -> ?UpdateOfficersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->officers->update(
    new UpdateOfficersRequest([
        'id' => 'id',
        'name' => 'name',
        'role' => UpdateOfficersRequestRole::Director->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$appointedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$powerNotary:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$resignedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$signsAccounts:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;officers-&gt;delete($request) -> ?DeleteOfficersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->officers->delete(
    new DeleteOfficersRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## migration
<details><summary><code>$client-&gt;migration-&gt;booksValidate($request) -> ?BooksValidateMigrationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Runs every check the import runs (accounts, partners, balances, open invoices, assets, stock) and returns the same summary and warnings, then rolls everything back. Nothing is stored.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->migration->booksValidate(
    new BooksValidateMigrationRequest([
        'cutoverDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cutoverDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accounts:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$partners:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openingBalances:** `?BooksValidateMigrationRequestOpeningBalances` 
    
</dd>
</dl>

<dl>
<dd>

**$journal:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openReceivables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openPayables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$assetGroups:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssets:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$stock:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;migration-&gt;booksImport($request) -> ?BooksImportMigrationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Brings a company over from another system in one call: chart of accounts, partners, items, opening balances (or the full journal history), open customer and supplier invoices, fixed assets with their accumulated depreciation, and stock on hand. The whole package is written in one database transaction — if any row fails, nothing is stored.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->migration->booksImport(
    new BooksImportMigrationRequest([
        'cutoverDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cutoverDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accounts:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$partners:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openingBalances:** `?BooksImportMigrationRequestOpeningBalances` 
    
</dd>
</dl>

<dl>
<dd>

**$journal:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openReceivables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openPayables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$assetGroups:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssets:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$stock:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## assets
<details><summary><code>$client-&gt;assets-&gt;groupsCreate($request) -> ?GroupsCreateAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->groupsCreate(
    new GroupsCreateAssetsRequest([
        'code' => 'code',
        'name' => 'name',
        'assetAccountCode' => 'assetAccountCode',
        'depreciationAccountCode' => 'depreciationAccountCode',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultUsefulLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$assetAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$depreciationAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;groupsList($request) -> ?GroupsListAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->groupsList(
    new GroupsListAssetsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsCreate($request) -> ?AssetsCreateAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsCreate(
    new AssetsCreateAssetsRequest([
        'groupId' => 'groupId',
        'code' => 'code',
        'name' => 'name',
        'acquisitionDate' => new DateTime('2026-07-01'),
        'acquisitionCost' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$depreciationStartDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionCost:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$salvageValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$usefulLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsUpdate($request) -> ?AssetsUpdateAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsUpdate(
    new AssetsUpdateAssetsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$depreciationStartDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionCost:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$salvageValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$usefulLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsInputVat($request) -> ?AssetsInputVatAssetsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Record the input VAT facts of a capital good that the annual VAT return needs for the adjustment of the deduction over the adjustment period (Article 187 of the VAT Directive, § 15a UStG): the input VAT on the acquisition, the date of first use, the share of use for deductible turnover at first use, whether it is land or a building (ten-year period instead of five), and every later year in which the share changed or the good was sold or withdrawn. Allowed also after depreciation has been posted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsInputVat(
    new AssetsInputVatAssetsRequest([
        'id' => 'id',
        'inputVatRealEstate' => true,
        'inputVatUseChanges' => [
            new AssetsInputVatAssetsRequestInputVatUseChangesItem([
                'year' => 1000000,
                'percent' => '121.00',
                'reason' => AssetsInputVatAssetsRequestInputVatUseChangesItemReason::UseChange->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$inputVatAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inputVatFirstUseDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$inputVatDeductiblePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inputVatRealEstate:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$inputVatUseChanges:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsGet($request) -> ?AssetsGetAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsGet(
    new AssetsGetAssetsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsList($request) -> ?AssetsListAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsList(
    new AssetsListAssetsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsModernize($request) -> ?AssetsModernizeAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsModernize(
    new AssetsModernizeAssetsRequest([
        'id' => 'id',
        'date' => new DateTime('2026-07-01'),
        'amount' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$addedLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;assetsDispose($request) -> ?AssetsDisposeAssetsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Dispose of a fixed asset (sold, scrapped or written off). Removes its cost and accumulated depreciation, books the net book value as a disposal loss and the proceeds as a disposal gain (posting rules assets.disposalLoss, assets.disposalGain, assets.disposalProceeds), and stops its depreciation. Depreciation must be posted for every month before the disposal month.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->assetsDispose(
    new AssetsDisposeAssetsRequest([
        'id' => 'id',
        'date' => new DateTime('2026-07-01'),
        'reason' => AssetsDisposeAssetsRequestReason::Sold->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$proceeds:** `?string` — Sale price excluding VAT; 0 when scrapped or written off
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;depreciationPreview($request) -> ?DepreciationPreviewAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->depreciationPreview(
    new DepreciationPreviewAssetsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;depreciationPost($request) -> ?DepreciationPostAssetsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->depreciationPost(
    new DepreciationPostAssetsRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## hr
<details><summary><code>$client-&gt;hr-&gt;positionsCreate($request) -> ?PositionsCreateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->positionsCreate(
    new PositionsCreateHrRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;positionsUpdate($request) -> ?PositionsUpdateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->positionsUpdate(
    new PositionsUpdateHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;positionsList($request) -> ?PositionsListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->positionsList(
    new PositionsListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesCreate($request) -> ?EmployeesCreateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesCreate(
    new EmployeesCreateHrRequest([
        'firstName' => 'firstName',
        'lastName' => 'lastName',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?EmployeesCreateHrRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceStart:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$hireDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$applyAllowance:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$allowanceOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$payrollOptions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesUpdate($request) -> ?EmployeesUpdateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesUpdate(
    new EmployeesUpdateHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?EmployeesUpdateHrRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceStart:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$hireDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$applyAllowance:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$allowanceOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$payrollOptions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$terminationDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesGet($request) -> ?EmployeesGetHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesGet(
    new EmployeesGetHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesFields($request) -> ?EmployeesFieldsHrResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Attributes a filing of the company country needs about a person that the shared employee record does not carry, such as the sex and place of birth an Italian income certificate asks for. Their values are kept in the payrollOptions of the employee.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesFields(
    new EmployeesFieldsHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesList($request) -> ?EmployeesListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesList(
    new EmployeesListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesDelete($request) -> ?EmployeesDeleteHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesDelete(
    new EmployeesDeleteHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesAnonymize($request) -> ?EmployeesAnonymizeHrResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replaces the name with a placeholder and removes personal code, birth date, contact details, address, bank account, social-insurance number, notes and sick-leave reasons. Payroll and contract rows stay linked to the record for the statutory retention period.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesAnonymize(
    new EmployeesAnonymizeHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;contractsCreate($request) -> ?ContractsCreateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->contractsCreate(
    new ContractsCreateHrRequest([
        'employeeId' => 'employeeId',
        'startDate' => new DateTime('2026-07-01'),
        'baseSalary' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$positionId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$departmentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduleId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$agreementId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contractNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$baseSalary:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$salaryType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$workHours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;contractsEnd($request) -> ?ContractsEndHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->contractsEnd(
    new ContractsEndHrRequest([
        'id' => 'id',
        'endDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$endReason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;contractsList($request) -> ?ContractsListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->contractsList(
    new ContractsListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;leaveBalancesSet($request) -> ?LeaveBalancesSetHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->leaveBalancesSet(
    new LeaveBalancesSetHrRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'entitledDays' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$entitledDays:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$usedDays:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;leaveBalancesList($request) -> ?LeaveBalancesListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->leaveBalancesList(
    new LeaveBalancesListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;incapacityCertificatesCreate($request) -> ?IncapacityCertificatesCreateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->incapacityCertificatesCreate(
    new IncapacityCertificatesCreateHrRequest([
        'employeeId' => 'employeeId',
        'number' => 'number',
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$number:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;incapacityCertificatesList($request) -> ?IncapacityCertificatesListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->incapacityCertificatesList(
    new IncapacityCertificatesListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesRecordsCreate($request) -> ?EmployeesRecordsCreateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesRecordsCreate(
    new EmployeesRecordsCreateHrRequest([
        'employeeId' => 'employeeId',
        'type' => EmployeesRecordsCreateHrRequestType::Education->value,
        'title' => 'title',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$institution:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validUntil:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$fileId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesRecordsUpdate($request) -> ?EmployeesRecordsUpdateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesRecordsUpdate(
    new EmployeesRecordsUpdateHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$institution:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$validUntil:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$fileId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesRecordsDelete($request) -> ?EmployeesRecordsDeleteHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesRecordsDelete(
    new EmployeesRecordsDeleteHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesRecordsList($request) -> ?EmployeesRecordsListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesRecordsList(
    new EmployeesRecordsListHrRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;employeesAttachmentsList($request) -> ?EmployeesAttachmentsListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->employeesAttachmentsList(
    new EmployeesAttachmentsListHrRequest([
        'employeeId' => 'employeeId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;timesheetsGenerate($request) -> ?TimesheetsGenerateHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->timesheetsGenerate(
    new TimesheetsGenerateHrRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;timesheetsUpsert($request) -> ?TimesheetsUpsertHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->timesheetsUpsert(
    new TimesheetsUpsertHrRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'month' => 1000000,
        'days' => [
            new TimesheetsUpsertHrRequestDaysItem([
                'day' => 1000000,
                'hours' => '121.00',
                'type' => TimesheetsUpsertHrRequestDaysItemType::Work->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$days:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;timesheetsGet($request) -> ?TimesheetsGetHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->timesheetsGet(
    new TimesheetsGetHrRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;timesheetsList($request) -> ?TimesheetsListHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->timesheetsList(
    new TimesheetsListHrRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;timesheetsDelete($request) -> ?TimesheetsDeleteHrResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->timesheetsDelete(
    new TimesheetsDeleteHrRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## fleet
<details><summary><code>$client-&gt;fleet-&gt;vehiclesCreate($request) -> ?VehiclesCreateFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->vehiclesCreate(
    new VehiclesCreateFleetRequest([
        'plateNumber' => 'plateNumber',
        'make' => 'make',
        'model' => 'model',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$plateNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$make:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$vin:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fuelType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$marketValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssetId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$technicalInspectionDue:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$insuranceDue:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;vehiclesUpdate($request) -> ?VehiclesUpdateFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->vehiclesUpdate(
    new VehiclesUpdateFleetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$plateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$make:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$vin:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fuelType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$marketValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssetId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$technicalInspectionDue:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$insuranceDue:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;vehiclesGet($request) -> ?VehiclesGetFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->vehiclesGet(
    new VehiclesGetFleetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;vehiclesList($request) -> ?VehiclesListFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->vehiclesList(
    new VehiclesListFleetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;assignmentsCreate($request) -> ?AssignmentsCreateFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->assignmentsCreate(
    new AssignmentsCreateFleetRequest([
        'vehicleId' => 'vehicleId',
        'employeeId' => 'employeeId',
        'fromDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$vehicleId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$privateUse:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$employerPaysFuel:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;assignmentsEnd($request) -> ?AssignmentsEndFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->assignmentsEnd(
    new AssignmentsEndFleetRequest([
        'id' => 'id',
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;assignmentsList($request) -> ?AssignmentsListFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->assignmentsList(
    new AssignmentsListFleetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;naturaPreview($request) -> ?NaturaPreviewFleetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->naturaPreview(
    new NaturaPreviewFleetRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## payroll
<details><summary><code>$client-&gt;payroll-&gt;departmentsCreate($request) -> ?DepartmentsCreatePayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->departmentsCreate(
    new DepartmentsCreatePayrollRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;departmentsList($request) -> ?DepartmentsListPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->departmentsList(
    new DepartmentsListPayrollRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;schedulesCreate($request) -> ?SchedulesCreatePayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->schedulesCreate(
    new SchedulesCreatePayrollRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$hoursPerWeek:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;schedulesList($request) -> ?SchedulesListPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->schedulesList(
    new SchedulesListPayrollRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;calc($request) -> ?CalcPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->calc(
    new CalcPayrollRequest([
        'taxableBase' => '121.00',
        'date' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$taxableBase:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$applyAllowance:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$allowanceOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedTerm:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$benefitInKind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$options:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;runsCreate($request) -> ?RunsCreatePayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->runsCreate(
    new RunsCreatePayrollRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$includeNatura:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$grossOverrides:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;runsGet($request) -> ?RunsGetPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->runsGet(
    new RunsGetPayrollRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;runsList($request) -> ?RunsListPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->runsList(
    new RunsListPayrollRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;linesAttendance($request) -> ?LinesAttendancePayrollResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

The days and hours worked, the days on the register and the average hourly earnings that some countries report per employment. The Czech monthly employer report asks for all four. They can be set while the run is a draft.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->linesAttendance(
    new LinesAttendancePayrollRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$daysWorked:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hoursWorked:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registeredDays:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$averageHourlyEarnings:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;runsApprove($request) -> ?RunsApprovePayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->runsApprove(
    new RunsApprovePayrollRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$wageAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employerAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payableAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$gpmAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sodraAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employerSocialAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deductionAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;runsCancel($request) -> ?RunsCancelPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->runsCancel(
    new RunsCancelPayrollRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;paymentsExport($request) -> ?PaymentsExportPayrollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->paymentsExport(
    new PaymentsExportPayrollRequest([
        'runId' => 'runId',
        'bankAccountId' => 'bankAccountId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$runId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$executionDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## agreements
<details><summary><code>$client-&gt;agreements-&gt;typesCreate($request) -> ?TypesCreateAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->typesCreate(
    new TypesCreateAgreementsRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;typesList($request) -> ?TypesListAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->typesList(
    new TypesListAgreementsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsCreate($request) -> ?AgreementsCreateAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsCreate(
    new AgreementsCreateAgreementsRequest([
        'number' => 'number',
        'startDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$typeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$number:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$autoRenew:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billingPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsGet($request) -> ?AgreementsGetAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsGet(
    new AgreementsGetAgreementsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsUpdate($request) -> ?AgreementsUpdateAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsUpdate(
    new AgreementsUpdateAgreementsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$typeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$autoRenew:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billingPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsDelete($request) -> ?AgreementsDeleteAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsDelete(
    new AgreementsDeleteAgreementsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsList($request) -> ?AgreementsListAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsList(
    new AgreementsListAgreementsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsGenerateInvoice($request) -> ?AgreementsGenerateInvoiceAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsGenerateInvoice(
    new AgreementsGenerateInvoiceAgreementsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOfDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;agreementsBillingRun($request) -> ?AgreementsBillingRunAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->agreementsBillingRun(
    new AgreementsBillingRunAgreementsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;insurancePoliciesCreate($request) -> ?InsurancePoliciesCreateAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->insurancePoliciesCreate(
    new InsurancePoliciesCreateAgreementsRequest([
        'policyNumber' => 'policyNumber',
        'insuredObject' => 'insuredObject',
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$insurerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$policyNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$insuredObject:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$premium:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;insurancePoliciesList($request) -> ?InsurancePoliciesListAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->insurancePoliciesList(
    new InsurancePoliciesListAgreementsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;insurancePoliciesDelete($request) -> ?InsurancePoliciesDeleteAgreementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->insurancePoliciesDelete(
    new InsurancePoliciesDeleteAgreementsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## inventory
<details><summary><code>$client-&gt;inventory-&gt;settingsGet($request) -> ?SettingsGetInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->settingsGet(
    new SettingsGetInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;settingsUpdate($request) -> ?SettingsUpdateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->settingsUpdate(
    new SettingsUpdateInventoryRequest([
        'negativeStockPolicy' => SettingsUpdateInventoryRequestNegativeStockPolicy::Reject->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$negativeStockPolicy:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;warehousesCreate($request) -> ?WarehousesCreateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->warehousesCreate(
    new WarehousesCreateInventoryRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;warehousesList($request) -> ?WarehousesListInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->warehousesList(
    new WarehousesListInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockReceive($request) -> ?StockReceiveInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockReceive(
    new StockReceiveInventoryRequest([
        'warehouseId' => 'warehouseId',
        'itemId' => 'itemId',
        'date' => new DateTime('2026-07-01'),
        'quantity' => '121.0000',
        'unitCost' => '121.000000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$unitCost:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiryDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockWriteOff($request) -> ?StockWriteOffInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockWriteOff(
    new StockWriteOffInventoryRequest([
        'warehouseId' => 'warehouseId',
        'itemId' => 'itemId',
        'date' => new DateTime('2026-07-01'),
        'quantity' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockTransfer($request) -> ?StockTransferInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockTransfer(
    new StockTransferInventoryRequest([
        'fromWarehouseId' => 'fromWarehouseId',
        'toWarehouseId' => 'toWarehouseId',
        'itemId' => 'itemId',
        'date' => new DateTime('2026-07-01'),
        'quantity' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromWarehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toWarehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockTake($request) -> ?StockTakeInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockTake(
    new StockTakeInventoryRequest([
        'warehouseId' => 'warehouseId',
        'date' => new DateTime('2026-07-01'),
        'lines' => [
            new StockTakeInventoryRequestLinesItem([
                'countedQty' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockLevels($request) -> ?StockLevelsInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockLevels(
    new StockLevelsInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;stockMovementsList($request) -> ?StockMovementsListInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->stockMovementsList(
    new StockMovementsListInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;lotsList($request) -> ?LotsListInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->lotsList(
    new LotsListInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;lotsGet($request) -> ?LotsGetInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->lotsGet(
    new LotsGetInventoryRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;lotsUpdate($request) -> ?LotsUpdateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->lotsUpdate(
    new LotsUpdateInventoryRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiryDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;landedCostsCreate($request) -> ?LandedCostsCreateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->landedCostsCreate(
    new LandedCostsCreateInventoryRequest([
        'date' => new DateTime('2026-07-01'),
        'amount' => '121.000000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$method:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$goodsReceiptId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$movementIds:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;landedCostsGet($request) -> ?LandedCostsGetInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->landedCostsGet(
    new LandedCostsGetInventoryRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;landedCostsList($request) -> ?LandedCostsListInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->landedCostsList(
    new LandedCostsListInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;reorderRulesCreate($request) -> ?ReorderRulesCreateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->reorderRulesCreate(
    new ReorderRulesCreateInventoryRequest([
        'itemId' => 'itemId',
        'minQty' => '121.0000',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQty:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reorderQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;reorderRulesUpdate($request) -> ?ReorderRulesUpdateInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->reorderRulesUpdate(
    new ReorderRulesUpdateInventoryRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$reorderQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;reorderRulesDelete($request) -> ?ReorderRulesDeleteInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->reorderRulesDelete(
    new ReorderRulesDeleteInventoryRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;reorderRulesList($request) -> ?ReorderRulesListInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->reorderRulesList(
    new ReorderRulesListInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;reorderRulesCheck($request) -> ?ReorderRulesCheckInventoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->reorderRulesCheck(
    new ReorderRulesCheckInventoryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## production
<details><summary><code>$client-&gt;production-&gt;workCentersCreate($request) -> ?WorkCentersCreateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->workCentersCreate(
    new WorkCentersCreateProductionRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPerHour:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maintenanceIntervalDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;workCentersUpdate($request) -> ?WorkCentersUpdateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->workCentersUpdate(
    new WorkCentersUpdateProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPerHour:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maintenanceIntervalDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;workCentersList($request) -> ?WorkCentersListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->workCentersList(
    new WorkCentersListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;routingsCreate($request) -> ?RoutingsCreateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->routingsCreate(
    new RoutingsCreateProductionRequest([
        'code' => 'code',
        'name' => 'name',
        'operations' => [
            new RoutingsCreateProductionRequestOperationsItem([
                'sequence' => 1000000,
                'name' => 'name',
                'workCenterId' => 'workCenterId',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operations:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;routingsGet($request) -> ?RoutingsGetProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->routingsGet(
    new RoutingsGetProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;routingsList($request) -> ?RoutingsListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->routingsList(
    new RoutingsListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;maintenanceCreate($request) -> ?MaintenanceCreateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->maintenanceCreate(
    new MaintenanceCreateProductionRequest([
        'workCenterId' => 'workCenterId',
        'type' => MaintenanceCreateProductionRequestType::Preventive->value,
        'plannedDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$workCenterId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$plannedDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;maintenanceComplete($request) -> ?MaintenanceCompleteProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->maintenanceComplete(
    new MaintenanceCompleteProductionRequest([
        'id' => 'id',
        'completedDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$completedDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$downtimeHours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cost:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;maintenanceCancel($request) -> ?MaintenanceCancelProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->maintenanceCancel(
    new MaintenanceCancelProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;maintenanceList($request) -> ?MaintenanceListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->maintenanceList(
    new MaintenanceListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;bomsCreate($request) -> ?BomsCreateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->bomsCreate(
    new BomsCreateProductionRequest([
        'code' => 'code',
        'name' => 'name',
        'finishedItemId' => 'finishedItemId',
        'lines' => [
            new BomsCreateProductionRequestLinesItem([
                'componentItemId' => 'componentItemId',
                'quantity' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$finishedItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$outputQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$routingId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;bomsGet($request) -> ?BomsGetProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->bomsGet(
    new BomsGetProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;bomsList($request) -> ?BomsListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->bomsList(
    new BomsListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;ordersCreate($request) -> ?OrdersCreateProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->ordersCreate(
    new OrdersCreateProductionRequest([
        'bomId' => 'bomId',
        'warehouseId' => 'warehouseId',
        'quantity' => '121.0000',
        'date' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bomId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$routingId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;ordersRecordOperation($request) -> ?OrdersRecordOperationProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->ordersRecordOperation(
    new OrdersRecordOperationProductionRequest([
        'id' => 'id',
        'actualMinutes' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$actualMinutes:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;qualityChecksAdd($request) -> ?QualityChecksAddProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->qualityChecksAdd(
    new QualityChecksAddProductionRequest([
        'orderId' => 'orderId',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;qualityChecksRecord($request) -> ?QualityChecksRecordProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->qualityChecksRecord(
    new QualityChecksRecordProductionRequest([
        'id' => 'id',
        'result' => QualityChecksRecordProductionRequestResult::Passed->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$result:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;qualityChecksList($request) -> ?QualityChecksListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->qualityChecksList(
    new QualityChecksListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;ordersComplete($request) -> ?OrdersCompleteProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->ordersComplete(
    new OrdersCompleteProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scrappedQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$componentsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$finishedAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;ordersGet($request) -> ?OrdersGetProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->ordersGet(
    new OrdersGetProductionRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;ordersList($request) -> ?OrdersListProductionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->ordersList(
    new OrdersListProductionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## ecommerce
<details><summary><code>$client-&gt;ecommerce-&gt;ordersCreate($request) -> ?OrdersCreateEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersCreate(
    new OrdersCreateEcommerceRequest([
        'lines' => [
            new OrdersCreateEcommerceRequestLinesItem([
                'description' => 'description',
                'quantity' => '121.0000',
                'unitPriceExclVat' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partner:** `?OrdersCreateEcommerceRequestPartner` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shipToCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$marketplace:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;ordersGet($request) -> ?OrdersGetEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersGet(
    new OrdersGetEcommerceRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;ordersList($request) -> ?OrdersListEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersList(
    new OrdersListEcommerceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;ordersReserve($request) -> ?OrdersReserveEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersReserve(
    new OrdersReserveEcommerceRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;ordersFulfill($request) -> ?OrdersFulfillEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersFulfill(
    new OrdersFulfillEcommerceRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$cogsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;ordersCancel($request) -> ?OrdersCancelEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->ordersCancel(
    new OrdersCancelEcommerceRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;productsList($request) -> ?ProductsListEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->productsList(
    new ProductsListEcommerceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$updatedSince:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;stockList($request) -> ?StockListEcommerceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->stockList(
    new StockListEcommerceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## cash
<details><summary><code>$client-&gt;cash-&gt;ordersCreate($request) -> ?OrdersCreateCashResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->ordersCreate(
    new OrdersCreateCashRequest([
        'type' => OrdersCreateCashRequestType::Receipt->value,
        'date' => new DateTime('2026-07-01'),
        'amount' => '121.0000',
        'purpose' => 'purpose',
        'counterAccountCode' => 'counterAccountCode',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$purpose:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$counterAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;ordersGet($request) -> ?OrdersGetCashResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->ordersGet(
    new OrdersGetCashRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;ordersList($request) -> ?OrdersListCashResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->ordersList(
    new OrdersListCashRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;balance($request) -> ?BalanceCashResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->balance(
    new BalanceCashRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOf:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;advanceHoldersBalances($request) -> ?AdvanceHoldersBalancesCashResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->advanceHoldersBalances(
    new AdvanceHoldersBalancesCashRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## projects
<details><summary><code>$client-&gt;projects-&gt;create($request) -> ?CreateProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->create(
    new CreateProjectsRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;update($request) -> ?UpdateProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->update(
    new UpdateProjectsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;get($request) -> ?GetProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->get(
    new GetProjectsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;list($request) -> ?ListProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->list(
    new ListProjectsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;timeEntriesCreate($request) -> ?TimeEntriesCreateProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->timeEntriesCreate(
    new TimeEntriesCreateProjectsRequest([
        'projectId' => 'projectId',
        'date' => new DateTime('2026-07-01'),
        'hours' => '121.00',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$hours:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;timeEntriesUpdate($request) -> ?TimeEntriesUpdateProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->timeEntriesUpdate(
    new TimeEntriesUpdateProjectsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$hours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;timeEntriesDelete($request) -> ?TimeEntriesDeleteProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->timeEntriesDelete(
    new TimeEntriesDeleteProjectsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;timeEntriesList($request) -> ?TimeEntriesListProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->timeEntriesList(
    new TimeEntriesListProjectsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;timeEntriesBill($request) -> ?TimeEntriesBillProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->timeEntriesBill(
    new TimeEntriesBillProjectsRequest([
        'projectId' => 'projectId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$groupBy:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;report($request) -> ?ReportProjectsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->report(
    new ReportProjectsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## transport
<details><summary><code>$client-&gt;transport-&gt;waybillsCreate($request) -> ?WaybillsCreateTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsCreate(
    new WaybillsCreateTransportRequest([
        'consigneePartnerId' => 'consigneePartnerId',
        'dispatchAt' => new DateTime('2024-01-15T09:30:00Z'),
        'loadAddress' => 'loadAddress',
        'unloadAddress' => 'unloadAddress',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$consigneePartnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transporterPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dispatchAt:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedArrivalAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$vehiclePlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$trailerPlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverSurname:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadWarehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadAddress:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$unloadAddress:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$valueEur:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;waybillsUpdate($request) -> ?WaybillsUpdateTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsUpdate(
    new WaybillsUpdateTransportRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$consigneePartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transporterPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dispatchAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedArrivalAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$vehiclePlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$trailerPlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverSurname:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadWarehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadAddress:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unloadAddress:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$valueEur:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;waybillsIssue($request) -> ?WaybillsIssueTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsIssue(
    new WaybillsIssueTransportRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;waybillsCancel($request) -> ?WaybillsCancelTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsCancel(
    new WaybillsCancelTransportRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;waybillsGet($request) -> ?WaybillsGetTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsGet(
    new WaybillsGetTransportRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;waybillsList($request) -> ?WaybillsListTransportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->waybillsList(
    new WaybillsListTransportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## pos
<details><summary><code>$client-&gt;pos-&gt;devicesCreate($request) -> ?DevicesCreatePosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->devicesCreate(
    new DevicesCreatePosRequest([
        'name' => 'name',
        'serialNumber' => 'serialNumber',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$serialNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;devicesUpdate($request) -> ?DevicesUpdatePosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->devicesUpdate(
    new DevicesUpdatePosRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$serialNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;devicesList($request) -> ?DevicesListPosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->devicesList(
    new DevicesListPosRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;reportsCreate($request) -> ?ReportsCreatePosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->reportsCreate(
    new ReportsCreatePosRequest([
        'reportNumber' => 'reportNumber',
        'date' => new DateTime('2026-07-01'),
        'vatLines' => [
            new ReportsCreatePosRequestVatLinesItem([
                'vatRatePercent' => '121.00',
                'netAmount' => '121.0000',
                'vatAmount' => '121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reportNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$deviceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatLines:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cardAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemLines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cardAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$revenueAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cogsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;reportsGet($request) -> ?ReportsGetPosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->reportsGet(
    new ReportsGetPosRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;reportsList($request) -> ?ReportsListPosResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->reportsList(
    new ReportsListPosRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## calendar
<details><summary><code>$client-&gt;calendar-&gt;list($request) -> ?ListCalendarResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->list(
    new ListCalendarRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$from:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$includeDone:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;get($request) -> ?GetCalendarResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->get(
    new GetCalendarRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;submit($request) -> ?SubmitCalendarResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

With amend: true the return is filed again as a correction of the one already submitted or accepted for the period; only returns whose format has a correction mark accept it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->submit(
    new SubmitCalendarRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amend:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;download($request) -> ?DownloadCalendarResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Builds the file of a deadline whose format Nordlet produces but whose administration takes it only through the company's own account or program. Nothing is sent and no filing is recorded.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->download(
    new DownloadCalendarRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;create($request) -> ?CreateCalendarResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->create(
    new CreateCalendarRequest([
        'title' => 'title',
        'dueDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$title:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;update($request) -> ?UpdateCalendarResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->update(
    new UpdateCalendarRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;delete($request) -> ?DeleteCalendarResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->delete(
    new DeleteCalendarRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## audit
<details><summary><code>$client-&gt;audit-&gt;list($request) -> ?ListAuditResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->audit->list(
    new ListAuditRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## webhooks
<details><summary><code>$client-&gt;webhooks-&gt;subscriptionsCreate($request) -> ?SubscriptionsCreateWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->subscriptionsCreate(
    new SubscriptionsCreateWebhooksRequest([
        'url' => 'url',
        'events' => [
            SubscriptionsCreateWebhooksRequestEventsItem::AgreementInvoiceGenerated->value,
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$url:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$events:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$secret:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;subscriptionsList($request) -> ?SubscriptionsListWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->subscriptionsList(
    new SubscriptionsListWebhooksRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;subscriptionsUpdate($request) -> ?SubscriptionsUpdateWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->subscriptionsUpdate(
    new SubscriptionsUpdateWebhooksRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$events:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;subscriptionsDelete($request) -> ?SubscriptionsDeleteWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->subscriptionsDelete(
    new SubscriptionsDeleteWebhooksRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;deliveriesList($request) -> ?DeliveriesListWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deliveriesList(
    new DeliveriesListWebhooksRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;deliveriesRedeliver($request) -> ?DeliveriesRedeliverWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deliveriesRedeliver(
    new DeliveriesRedeliverWebhooksRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## bank
<details><summary><code>$client-&gt;bank-&gt;accountsCreate($request) -> ?AccountsCreateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->accountsCreate(
    new AccountsCreateBankRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;accountsList($request) -> ?AccountsListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->accountsList(
    new AccountsListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;accountsUpdate($request) -> ?AccountsUpdateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->accountsUpdate(
    new AccountsUpdateBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsImport($request) -> ?TransactionsImportBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsImport(
    new TransactionsImportBankRequest([
        'bankAccountId' => 'bankAccountId',
        'transactions' => [
            new TransactionsImportBankRequestTransactionsItem([
                'date' => new DateTime('2026-07-01'),
                'amount' => '-121.0000',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transactions:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;statementsImport($request) -> ?StatementsImportBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->statementsImport(
    new StatementsImportBankRequest([
        'bankAccountId' => 'bankAccountId',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$format:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transfersCsv:** `?string` — Stripe transfers export (plain CSV or base64) used to post lender payouts and commissions
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsList($request) -> ?TransactionsListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsList(
    new TransactionsListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsMatch($request) -> ?TransactionsMatchBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsMatch(
    new TransactionsMatchBankRequest([
        'transactionId' => 'transactionId',
        'documentType' => TransactionsMatchBankRequestDocumentType::SaleInvoice->value,
        'documentId' => 'documentId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$transactionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceAmount:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsUnmatch($request) -> ?TransactionsUnmatchBankResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Undo a match. A payment matched to an invoice, or a line posted by an import template, gets a reversing journal transaction dated date (default: today) and the invoice paid amount and payment status are restored; a line linked to a payment-provider settlement is only unlinked. The line returns to status new.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsUnmatch(
    new TransactionsUnmatchBankRequest([
        'transactionId' => 'transactionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$transactionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsRecord($request) -> ?TransactionsRecordBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsRecord(
    new TransactionsRecordBankRequest([
        'bankAccountId' => 'bankAccountId',
        'date' => new DateTime('2026-07-01'),
        'amount' => '121.0000',
        'documentType' => TransactionsRecordBankRequestDocumentType::SaleInvoice->value,
        'documentId' => 'documentId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;paymentsExport($request) -> ?PaymentsExportBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->paymentsExport(
    new PaymentsExportBankRequest([
        'bankAccountId' => 'bankAccountId',
        'purchaseInvoiceIds' => [
            'purchaseInvoiceIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseInvoiceIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$executionDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;importTemplatesCreate($request) -> ?ImportTemplatesCreateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->importTemplatesCreate(
    new ImportTemplatesCreateBankRequest([
        'name' => 'name',
        'type' => ImportTemplatesCreateBankRequestType::Stripe->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$metaFields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceVatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$companyMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceInvoices:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lenderMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partialRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fullRefundLabel:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;importTemplatesUpdate($request) -> ?ImportTemplatesUpdateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->importTemplatesUpdate(
    new ImportTemplatesUpdateBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$metaFields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceVatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$companyMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceInvoices:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lenderMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partialRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fullRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;importTemplatesDelete($request) -> ?ImportTemplatesDeleteBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->importTemplatesDelete(
    new ImportTemplatesDeleteBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;importTemplatesGet($request) -> ?ImportTemplatesGetBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->importTemplatesGet(
    new ImportTemplatesGetBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;importTemplatesList($request) -> ?ImportTemplatesListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->importTemplatesList(
    new ImportTemplatesListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;matchRulesCreate($request) -> ?MatchRulesCreateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->matchRulesCreate(
    new MatchRulesCreateBankRequest([
        'name' => 'name',
        'pattern' => 'pattern',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pattern:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutIdPrefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateWindowDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;matchRulesUpdate($request) -> ?MatchRulesUpdateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->matchRulesUpdate(
    new MatchRulesUpdateBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pattern:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutIdPrefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateWindowDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;matchRulesDelete($request) -> ?MatchRulesDeleteBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->matchRulesDelete(
    new MatchRulesDeleteBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;matchRulesList($request) -> ?MatchRulesListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->matchRulesList(
    new MatchRulesListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;mandatesCreate($request) -> ?MandatesCreateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->mandatesCreate(
    new MandatesCreateBankRequest([
        'partnerId' => 'partnerId',
        'iban' => 'iban',
        'signatureDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$scheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sequenceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$signatureDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$reference:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debtorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;mandatesUpdate($request) -> ?MandatesUpdateBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->mandatesUpdate(
    new MandatesUpdateBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debtorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;mandatesCancel($request) -> ?MandatesCancelBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->mandatesCancel(
    new MandatesCancelBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;mandatesGet($request) -> ?MandatesGetBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->mandatesGet(
    new MandatesGetBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;mandatesList($request) -> ?MandatesListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->mandatesList(
    new MandatesListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;directDebitsExport($request) -> ?DirectDebitsExportBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->directDebitsExport(
    new DirectDebitsExportBankRequest([
        'bankAccountId' => 'bankAccountId',
        'saleInvoiceIds' => [
            'saleInvoiceIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$collectionDate:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;transactionsSuggestMatches($request) -> ?TransactionsSuggestMatchesBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->transactionsSuggestMatches(
    new TransactionsSuggestMatchesBankRequest([
        'transactionId' => 'transactionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$transactionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsImport($request) -> ?SettlementsImportBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsImport(
    new SettlementsImportBankRequest([
        'bankAccountId' => 'bankAccountId',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsList($request) -> ?SettlementsListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsList(
    new SettlementsListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsGet($request) -> ?SettlementsGetBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsGet(
    new SettlementsGetBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsMatch($request) -> ?SettlementsMatchBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsMatch(
    new SettlementsMatchBankRequest([
        'lineId' => 'lineId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$lineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsCommission($request) -> ?SettlementsCommissionBankResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

A line with its own rate or amount is split with that value when the batch is posted. A line without one falls back to the commissionPercent given to the posting call, and without that the amount goes to the suspense account. Send both fields as null to clear the line back to the fallback.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsCommission(
    new SettlementsCommissionBankRequest([
        'lineId' => 'lineId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$lineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionAmount:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsLink($request) -> ?SettlementsLinkBankResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Attach the incoming bank-statement line that carries this payout to the settlement batch.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsLink(
    new SettlementsLinkBankRequest([
        'id' => 'id',
        'bankTransactionId' => 'bankTransactionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankTransactionId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsUnlink($request) -> ?SettlementsUnlinkBankResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Detach the bank-statement line from the settlement batch and return the line to unmatched.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsUnlink(
    new SettlementsUnlinkBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;settlementsPost($request) -> ?SettlementsPostBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->settlementsPost(
    new SettlementsPostBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionPercent:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsBanksList($request) -> ?FeedsBanksListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsBanksList(
    new FeedsBanksListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsConnectionsStart($request) -> ?FeedsConnectionsStartBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsConnectionsStart(
    new FeedsConnectionsStartBankRequest([
        'aspspName' => 'aspspName',
        'aspspCountry' => 'aspspCountry',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$aspspName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$aspspCountry:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$psuType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$redirectUrl:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validForDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$language:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsConnectionsComplete($request) -> ?FeedsConnectionsCompleteBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsConnectionsComplete(
    new FeedsConnectionsCompleteBankRequest([
        'reference' => 'reference',
        'code' => 'code',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reference:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsConnectionsGet($request) -> ?FeedsConnectionsGetBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsConnectionsGet(
    new FeedsConnectionsGetBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsConnectionsList($request) -> ?FeedsConnectionsListBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsConnectionsList(
    new FeedsConnectionsListBankRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsConnectionsDelete($request) -> ?FeedsConnectionsDeleteBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsConnectionsDelete(
    new FeedsConnectionsDeleteBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsAccountsLink($request) -> ?FeedsAccountsLinkBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsAccountsLink(
    new FeedsAccountsLinkBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$createBankAccount:** `?FeedsAccountsLinkBankRequestCreateBankAccount` 
    
</dd>
</dl>

<dl>
<dd>

**$syncFrom:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsAccountsConfigure($request) -> ?FeedsAccountsConfigureBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsAccountsConfigure(
    new FeedsAccountsConfigureBankRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$importTemplateId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$syncSchedule:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;feedsSync($request) -> ?FeedsSyncBankResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->feedsSync(
    new FeedsSyncBankRequest([
        'connectionId' => 'connectionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$connectionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$feedAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## files
<details><summary><code>$client-&gt;files-&gt;upload($request) -> ?UploadFilesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->upload(
    new UploadFilesRequest([
        'entity' => 'entity',
        'fileName' => 'fileName',
        'mimeType' => 'mimeType',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$entity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$entityId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fileName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$mimeType:** `string` — Stored as the bare media type; only PNG, JPEG, GIF, WebP and PDF files are shown in the browser, every other type is downloaded
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Base64-encoded file content
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;get($request) -> ?GetFilesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->get(
    new GetFilesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;list($request) -> ?ListFilesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->list(
    new ListFilesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;delete($request) -> ?DeleteFilesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->delete(
    new DeleteFilesRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## reports
<details><summary><code>$client-&gt;reports-&gt;trialBalance($request) -> ?TrialBalanceReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->trialBalance(
    new TrialBalanceReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;sizeCategory($request) -> ?SizeCategoryReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->sizeCategory(
    new SizeCategoryReportsRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;financialStatements($request) -> ?FinancialStatementsReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->financialStatements(
    new FinancialStatementsReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$category:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;generalJournal($request) -> ?GeneralJournalReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->generalJournal(
    new GeneralJournalReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;glDetail($request) -> ?GlDetailReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->glDetail(
    new GlDetailReportsRequest([
        'accountCode' => 'accountCode',
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$accountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;partnerBalances($request) -> ?PartnerBalancesReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->partnerBalances(
    new PartnerBalancesReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;debtAging($request) -> ?DebtAgingReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->debtAging(
    new DebtAgingReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOf:** `?DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;monthlySummary($request) -> ?MonthlySummaryReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->monthlySummary(
    new MonthlySummaryReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;stockBalance($request) -> ?StockBalanceReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->stockBalance(
    new StockBalanceReportsRequest([
        'asOf' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOf:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;stockMovement($request) -> ?StockMovementReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->stockMovement(
    new StockMovementReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;vatSummary($request) -> ?VatSummaryReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->vatSummary(
    new VatSummaryReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;cashFlow($request) -> ?CashFlowReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->cashFlow(
    new CashFlowReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;stockAging($request) -> ?StockAgingReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->stockAging(
    new StockAgingReportsRequest([
        'asOf' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOf:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;stockShortage($request) -> ?StockShortageReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->stockShortage(
    new StockShortageReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;sie($request) -> ?SieReportsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Export the ledger of one financial year as an SIE file (the Swedish standard accounting interchange format, specification 4B). The file carries the chart of accounts, the opening and closing balance of every balance sheet account and the turnover of every result account for the year and the year before it, and, when asked for, every posted voucher of the year with its lines. Cost centres travel as dimension 1 and projects as dimension 6. Services that build a Swedish annual report read this file.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->sie(
    new SieReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$includeTransactions:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;datev($request) -> ?DatevReportsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Export the posted ledger of a period as a DATEV Buchungsstapel file (DATEV format, category 21, version 700). Every transaction becomes one or more bookings of an amount between an account and a contra account; a transaction with more than two lines is split into pairs whose totals match it. The file is semicolon separated and written in the Windows-1252 character set DATEV expects.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->datev(
    new DatevReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$consultantNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$clientNumber:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;fec($request) -> ?FecReportsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Export the posted ledger of a period as a French FEC file (fichier des écritures comptables, order of 29 July 2013). One line per journal entry line, with the eighteen fields the order names, in their order, after a header line. Tab separated, UTF-8, comma as the decimal separator.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->fec(
    new FecReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;euPurchases($request) -> ?EuPurchasesReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->euPurchases(
    new EuPurchasesReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;vatDetail($request) -> ?VatDetailReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->vatDetail(
    new VatDetailReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;posSales($request) -> ?PosSalesReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->posSales(
    new PosSalesReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;onlineSales($request) -> ?OnlineSalesReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->onlineSales(
    new OnlineSalesReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;oss($request) -> ?OssReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->oss(
    new OssReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;advanceReconciliation($request) -> ?AdvanceReconciliationReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->advanceReconciliation(
    new AdvanceReconciliationReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;writeOffActs($request) -> ?WriteOffActsReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->writeOffActs(
    new WriteOffActsReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;costCenters($request) -> ?CostCentersReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->costCenters(
    new CostCentersReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;costCenterActivity($request) -> ?CostCenterActivityReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->costCenterActivity(
    new CostCenterActivityReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
        'costCenterId' => 'costCenterId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$costCenterId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;costCenterItems($request) -> ?CostCenterItemsReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->costCenterItems(
    new CostCenterItemsReportsRequest([
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$costCenterId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;jobsCreate($request) -> ?JobsCreateReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->jobsCreate(
    new JobsCreateReportsRequest([
        'reportType' => 'reportType',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reportType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$formats:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;jobsGet($request) -> ?JobsGetReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->jobsGet(
    new JobsGetReportsRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;jobsList($request) -> ?JobsListReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->jobsList(
    new JobsListReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## consolidation
<details><summary><code>$client-&gt;consolidation-&gt;groupsCreate($request) -> ?GroupsCreateConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->groupsCreate(
    new GroupsCreateConsolidationRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$presentationCurrency:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;groupsList($request) -> ?GroupsListConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->groupsList(
    new GroupsListConsolidationRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;groupsGet($request) -> ?GroupsGetConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->groupsGet(
    new GroupsGetConsolidationRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;groupsUpdate($request) -> ?GroupsUpdateConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->groupsUpdate(
    new GroupsUpdateConsolidationRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$presentationCurrency:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;groupsDelete($request) -> ?GroupsDeleteConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->groupsDelete(
    new GroupsDeleteConsolidationRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;membersAdd($request) -> ?MembersAddConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->membersAdd(
    new MembersAddConsolidationRequest([
        'groupId' => 'groupId',
        'memberCompanyId' => 'memberCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberCompanyId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$ownershipPercent:** `?float` 
    
</dd>
</dl>

<dl>
<dd>

**$method:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;membersRemove($request) -> ?MembersRemoveConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->membersRemove(
    new MembersRemoveConsolidationRequest([
        'groupId' => 'groupId',
        'memberCompanyId' => 'memberCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberCompanyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;intercompanyCandidates($request) -> ?IntercompanyCandidatesConsolidationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Partners in member companies that look like other members of the same group (matched on company code or VAT code), with any existing intercompany link. Confirming a candidate via intercompany/links/set enables invoice mirroring.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->intercompanyCandidates(
    new IntercompanyCandidatesConsolidationRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;intercompanyLinksSet($request) -> ?IntercompanyLinksSetConsolidationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Confirm that a partner record in one member company represents another member company of the group. Once links exist in both directions, issuing an intercompany sale invoice automatically creates the matching draft purchase invoice in the counterparty.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->intercompanyLinksSet(
    new IntercompanyLinksSetConsolidationRequest([
        'groupId' => 'groupId',
        'partnerId' => 'partnerId',
        'counterpartyCompanyId' => 'counterpartyCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$counterpartyCompanyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;intercompanyLinksList($request) -> ?IntercompanyLinksListConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->intercompanyLinksList(
    new IntercompanyLinksListConsolidationRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;intercompanyLinksRemove($request) -> ?IntercompanyLinksRemoveConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->intercompanyLinksRemove(
    new IntercompanyLinksRemoveConsolidationRequest([
        'groupId' => 'groupId',
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;intercompanyReport($request) -> ?IntercompanyReportConsolidationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Intercompany reconciliation for a period: every issued intercompany sale invoice with its mirrored or manually recorded counterpart, unmatched documents on both sides, and per-currency totals with differences. Confirmed pairs are the basis for consolidation eliminations.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->intercompanyReport(
    new IntercompanyReportConsolidationRequest([
        'groupId' => 'groupId',
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;report($request) -> ?ReportConsolidationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->report(
    new ReportConsolidationRequest([
        'groupId' => 'groupId',
        'fromDate' => new DateTime('2026-07-01'),
        'toDate' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$category:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eliminations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## public
<details><summary><code>$client-&gt;public_-&gt;integrationRequests($request) -> ?IntegrationRequestsPublicResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->public->integrationRequests(
    new IntegrationRequestsPublicRequest([
        'integration' => 'integration',
        'name' => 'name',
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$integration:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$company:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$details:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;public_-&gt;pay($token)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->public->pay(
    'token',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## billing
<details><summary><code>$client-&gt;billing-&gt;accountGet($request) -> ?AccountGetBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->accountGet(
    new AccountGetBillingRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;accountSetPlan($request) -> ?AccountSetPlanBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->accountSetPlan(
    new AccountSetPlanBillingRequest([
        'plan' => AccountSetPlanBillingRequestPlan::Starter->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$plan:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;topupCreate($request) -> ?TopupCreateBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->topupCreate(
    new TopupCreateBillingRequest([
        'amountCents' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$amountCents:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;portalCreate($request) -> ?PortalCreateBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->portalCreate(
    new PortalCreateBillingRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;transactionsList($request) -> ?TransactionsListBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->transactionsList(
    new TransactionsListBillingRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;usageList($request) -> ?UsageListBillingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->usageList(
    new UsageListBillingRequest([
        'from' => new DateTime('2026-07-01'),
        'to' => new DateTime('2026-07-01'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$from:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `DateTime` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## account
<details><summary><code>$client-&gt;account-&gt;loginLinkRequest($request) -> ?LoginLinkRequestAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->loginLinkRequest(
    new LoginLinkRequestAccountRequest([
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptTerms:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$referralCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;loginLinkConsume($request) -> ?LoginLinkConsumeAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->loginLinkConsume(
    new LoginLinkConsumeAccountRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;logout($request) -> ?LogoutAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->logout(
    new LogoutAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;me($request) -> ?MeAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->me(
    new MeAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;membersList($request) -> ?MembersListAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->membersList(
    new MembersListAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;membersSetRole($request) -> ?MembersSetRoleAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->membersSetRole(
    new MembersSetRoleAccountRequest([
        'userId' => 'userId',
        'role' => MembersSetRoleAccountRequestRole::Admin->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;membersTransferOwnership($request) -> ?MembersTransferOwnershipAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->membersTransferOwnership(
    new MembersTransferOwnershipAccountRequest([
        'userId' => 'userId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$movePayer:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;membersRemove($request) -> ?MembersRemoveAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->membersRemove(
    new MembersRemoveAccountRequest([
        'userId' => 'userId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;invitesCreate($request) -> ?InvitesCreateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->invitesCreate(
    new InvitesCreateAccountRequest([
        'email' => 'email',
        'role' => InvitesCreateAccountRequestRole::Admin->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;invitesList($request) -> ?InvitesListAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->invitesList(
    new InvitesListAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;invitesRevoke($request) -> ?InvitesRevokeAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->invitesRevoke(
    new InvitesRevokeAccountRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;invitesGet($request) -> ?InvitesGetAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->invitesGet(
    new InvitesGetAccountRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;invitesAccept($request) -> ?InvitesAcceptAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->invitesAccept(
    new InvitesAcceptAccountRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptTerms:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;localeSet($request) -> ?LocaleSetAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->localeSet(
    new LocaleSetAccountRequest([
        'locale' => LocaleSetAccountRequestLocale::En->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesCreate($request) -> ?CompaniesCreateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesCreate(
    new CompaniesCreateAccountRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$smeExemptionNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isVatPayer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$vatPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fiscalYearEndMonth:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$timeZone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$filingOptions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?CompaniesCreateAccountRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sepaCreditorId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultInvoiceCurrency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$legalForm:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registryName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incorporatedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$shareCapital:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountsKeptBy:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bookkeeperName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorRegistrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` — Jurisdiction the company is registered in (immutable after creation)
    
</dd>
</dl>

<dl>
<dd>

**$baseCurrency:** `?string` — Currency the ledger is kept in; defaults to the national currency of countryCode (immutable after creation)
    
</dd>
</dl>

<dl>
<dd>

**$isSandbox:** `?bool` — Sandbox companies hold test data and are purged immediately on delete (immutable after creation)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesSelect($request) -> ?CompaniesSelectAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesSelect(
    new CompaniesSelectAccountRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesProfile($request) -> ?CompaniesProfileAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesProfile(
    new CompaniesProfileAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesUpdate($request) -> ?CompaniesUpdateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesUpdate(
    new CompaniesUpdateAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$smeExemptionNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isVatPayer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$vatPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fiscalYearEndMonth:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$timeZone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$filingOptions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?CompaniesUpdateAccountRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sepaCreditorId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultInvoiceCurrency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$legalForm:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registryName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incorporatedOn:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$shareCapital:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountsKeptBy:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bookkeeperName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditorRegistrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$auditRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$logo:** `?CompaniesUpdateAccountRequestLogo` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesArchive($request) -> ?CompaniesArchiveAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesArchive(
    new CompaniesArchiveAccountRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesDelete($request) -> ?CompaniesDeleteAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesDelete(
    new CompaniesDeleteAccountRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;companiesActivate($request) -> ?CompaniesActivateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->companiesActivate(
    new CompaniesActivateAccountRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;apiKeysCreate($request) -> ?ApiKeysCreateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->apiKeysCreate(
    new ApiKeysCreateAccountRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scopes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresInDays:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;apiKeysList($request) -> ?ApiKeysListAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->apiKeysList(
    new ApiKeysListAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;apiKeysRotate($request) -> ?ApiKeysRotateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->apiKeysRotate(
    new ApiKeysRotateAccountRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$overlapHours:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresInDays:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;apiKeysRevoke($request) -> ?ApiKeysRevokeAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->apiKeysRevoke(
    new ApiKeysRevokeAccountRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;consentAccept($request) -> ?ConsentAcceptAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->consentAccept(
    new ConsentAcceptAccountRequest([
        'acceptTerms' => true,
        'acceptDpa' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$acceptTerms:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;profileUpdate($request) -> ?ProfileUpdateAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->profileUpdate(
    new ProfileUpdateAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;emailChangeRequest($request) -> ?EmailChangeRequestAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->emailChangeRequest(
    new EmailChangeRequestAccountRequest([
        'newEmail' => 'newEmail',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$newEmail:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;sessionsList($request) -> ?SessionsListAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->sessionsList(
    new SessionsListAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;sessionsRevoke($request) -> ?SessionsRevokeAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->sessionsRevoke(
    new SessionsRevokeAccountRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;sessionsRevokeOthers($request) -> ?SessionsRevokeOthersAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->sessionsRevokeOthers(
    new SessionsRevokeOthersAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;export($request) -> ?ExportAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->export(
    new ExportAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;delete($request) -> ?DeleteAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes the user: sessions, sign-in links, memberships and pending invitations are deleted at once; the email and name are replaced by an anonymous placeholder immediately and the remaining row is removed after 30 days. Refused while the user still owns or pays for a company that is not deleted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->delete(
    new DeleteAccountRequest([
        'confirmEmail' => 'confirmEmail',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$confirmEmail:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;referralGet($request) -> ?ReferralGetAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->referralGet(
    new ReferralGetAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;referralConvert($request) -> ?ReferralConvertAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->referralConvert(
    new ReferralConvertAccountRequest([
        'points' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$points:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;tableSettingsGet($request) -> ?TableSettingsGetAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->tableSettingsGet(
    new TableSettingsGetAccountRequest([
        'tableKey' => 'tableKey',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tableKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;tableSettingsSet($request) -> ?TableSettingsSetAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->tableSettingsSet(
    new TableSettingsSetAccountRequest([
        'tableKey' => 'tableKey',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tableKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$columns:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?float` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;tableSettingsList($request) -> ?TableSettingsListAccountResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->tableSettingsList(
    new TableSettingsListAccountRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

