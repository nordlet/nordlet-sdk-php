<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Exception;

class GbP11DItemsListDeclarationsResponseItemsItemItem extends JsonSerializableType
{
    /**
     * @var (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemPayment
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemCar
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemVans
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemLoan
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemMedical
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemRelocation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemServices
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ),
     *   value: (
     *    GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemPayment
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemCar
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemVans
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemLoan
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemMedical
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemRelocation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemServices
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred $assetTransferred
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function assetTransferred(GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred $assetTransferred): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'asset-transferred',
            'value' => $assetTransferred,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemPayment $payment
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function payment(GbP11DItemsListDeclarationsResponseItemsItemItemPayment $payment): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'payment',
            'value' => $payment,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments $taxOnNotionalPayments
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function taxOnNotionalPayments(GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments $taxOnNotionalPayments): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'tax-on-notional-payments',
            'value' => $taxOnNotionalPayments,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards $vouchersOrCreditCards
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function vouchersOrCreditCards(GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards $vouchersOrCreditCards): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'vouchers-or-credit-cards',
            'value' => $vouchersOrCreditCards,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation $livingAccommodation
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function livingAccommodation(GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation $livingAccommodation): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'living-accommodation',
            'value' => $livingAccommodation,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance $mileageAllowance
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function mileageAllowance(GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance $mileageAllowance): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'mileage-allowance',
            'value' => $mileageAllowance,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemCar $car
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function car(GbP11DItemsListDeclarationsResponseItemsItemItemCar $car): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'car',
            'value' => $car,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemVans $vans
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function vans(GbP11DItemsListDeclarationsResponseItemsItemItemVans $vans): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'vans',
            'value' => $vans,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemLoan $loan
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function loan(GbP11DItemsListDeclarationsResponseItemsItemItemLoan $loan): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'loan',
            'value' => $loan,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemMedical $medical
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function medical(GbP11DItemsListDeclarationsResponseItemsItemItemMedical $medical): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'medical',
            'value' => $medical,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemRelocation $relocation
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function relocation(GbP11DItemsListDeclarationsResponseItemsItemItemRelocation $relocation): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'relocation',
            'value' => $relocation,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemServices $services
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function services(GbP11DItemsListDeclarationsResponseItemsItemItemServices $services): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'services',
            'value' => $services,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable $assetAvailable
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function assetAvailable(GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable $assetAvailable): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'asset-available',
            'value' => $assetAvailable,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A $otherClass1A
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function otherClass1A(GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A $otherClass1A): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'other-class-1a',
            'value' => $otherClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A $otherNonClass1A
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function otherNonClass1A(GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A $otherNonClass1A): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'other-non-class-1a',
            'value' => $otherNonClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted $taxPaidNotDeducted
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function taxPaidNotDeducted(GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted $taxPaidNotDeducted): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'tax-paid-not-deducted',
            'value' => $taxPaidNotDeducted,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function expensesTravelAndSubsistence(GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'expenses-travel-and-subsistence',
            'value' => $expensesTravelAndSubsistence,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment $expensesEntertainment
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function expensesEntertainment(GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment $expensesEntertainment): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'expenses-entertainment',
            'value' => $expensesEntertainment,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone $expensesHomeTelephone
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function expensesHomeTelephone(GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone $expensesHomeTelephone): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'expenses-home-telephone',
            'value' => $expensesHomeTelephone,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function expensesNonQualifyingRelocation(GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'expenses-non-qualifying-relocation',
            'value' => $expensesNonQualifyingRelocation,
        ]);
    }

    /**
     * @param GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther $expensesOther
     * @return GbP11DItemsListDeclarationsResponseItemsItemItem
     */
    public static function expensesOther(GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther $expensesOther): GbP11DItemsListDeclarationsResponseItemsItemItem
    {
        return new GbP11DItemsListDeclarationsResponseItemsItemItem([
            'type' => 'expenses-other',
            'value' => $expensesOther,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssetTransferred(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred && $this->type === 'asset-transferred';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred
     */
    public function asAssetTransferred(): GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred && $this->type === 'asset-transferred')) {
            throw new Exception(
                "Expected asset-transferred; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPayment(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemPayment && $this->type === 'payment';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemPayment
     */
    public function asPayment(): GbP11DItemsListDeclarationsResponseItemsItemItemPayment
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemPayment && $this->type === 'payment')) {
            throw new Exception(
                "Expected payment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxOnNotionalPayments(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments
     */
    public function asTaxOnNotionalPayments(): GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments')) {
            throw new Exception(
                "Expected tax-on-notional-payments; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVouchersOrCreditCards(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards
     */
    public function asVouchersOrCreditCards(): GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards')) {
            throw new Exception(
                "Expected vouchers-or-credit-cards; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLivingAccommodation(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation && $this->type === 'living-accommodation';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation
     */
    public function asLivingAccommodation(): GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation && $this->type === 'living-accommodation')) {
            throw new Exception(
                "Expected living-accommodation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMileageAllowance(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance && $this->type === 'mileage-allowance';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance
     */
    public function asMileageAllowance(): GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance && $this->type === 'mileage-allowance')) {
            throw new Exception(
                "Expected mileage-allowance; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCar(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemCar && $this->type === 'car';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemCar
     */
    public function asCar(): GbP11DItemsListDeclarationsResponseItemsItemItemCar
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemCar && $this->type === 'car')) {
            throw new Exception(
                "Expected car; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVans(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemVans && $this->type === 'vans';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemVans
     */
    public function asVans(): GbP11DItemsListDeclarationsResponseItemsItemItemVans
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemVans && $this->type === 'vans')) {
            throw new Exception(
                "Expected vans; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLoan(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemLoan && $this->type === 'loan';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemLoan
     */
    public function asLoan(): GbP11DItemsListDeclarationsResponseItemsItemItemLoan
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemLoan && $this->type === 'loan')) {
            throw new Exception(
                "Expected loan; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMedical(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemMedical && $this->type === 'medical';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemMedical
     */
    public function asMedical(): GbP11DItemsListDeclarationsResponseItemsItemItemMedical
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemMedical && $this->type === 'medical')) {
            throw new Exception(
                "Expected medical; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemRelocation && $this->type === 'relocation';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemRelocation
     */
    public function asRelocation(): GbP11DItemsListDeclarationsResponseItemsItemItemRelocation
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemRelocation && $this->type === 'relocation')) {
            throw new Exception(
                "Expected relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isServices(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemServices && $this->type === 'services';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemServices
     */
    public function asServices(): GbP11DItemsListDeclarationsResponseItemsItemItemServices
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemServices && $this->type === 'services')) {
            throw new Exception(
                "Expected services; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAssetAvailable(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable && $this->type === 'asset-available';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable
     */
    public function asAssetAvailable(): GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable && $this->type === 'asset-available')) {
            throw new Exception(
                "Expected asset-available; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A && $this->type === 'other-class-1a';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A
     */
    public function asOtherClass1A(): GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A && $this->type === 'other-class-1a')) {
            throw new Exception(
                "Expected other-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherNonClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A && $this->type === 'other-non-class-1a';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A
     */
    public function asOtherNonClass1A(): GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A && $this->type === 'other-non-class-1a')) {
            throw new Exception(
                "Expected other-non-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxPaidNotDeducted(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted
     */
    public function asTaxPaidNotDeducted(): GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted')) {
            throw new Exception(
                "Expected tax-paid-not-deducted; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesTravelAndSubsistence(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence
     */
    public function asExpensesTravelAndSubsistence(): GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence')) {
            throw new Exception(
                "Expected expenses-travel-and-subsistence; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesEntertainment(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment && $this->type === 'expenses-entertainment';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment
     */
    public function asExpensesEntertainment(): GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment && $this->type === 'expenses-entertainment')) {
            throw new Exception(
                "Expected expenses-entertainment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesHomeTelephone(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone
     */
    public function asExpensesHomeTelephone(): GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone')) {
            throw new Exception(
                "Expected expenses-home-telephone; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesNonQualifyingRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation
     */
    public function asExpensesNonQualifyingRelocation(): GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation')) {
            throw new Exception(
                "Expected expenses-non-qualifying-relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesOther(): bool
    {
        return $this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther && $this->type === 'expenses-other';
    }

    /**
     * @return GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther
     */
    public function asExpensesOther(): GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther
    {
        if (!($this->value instanceof GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther && $this->type === 'expenses-other')) {
            throw new Exception(
                "Expected expenses-other; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'asset-transferred':
                $value = $this->asAssetTransferred()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'payment':
                $value = $this->asPayment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-on-notional-payments':
                $value = $this->asTaxOnNotionalPayments()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vouchers-or-credit-cards':
                $value = $this->asVouchersOrCreditCards()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'living-accommodation':
                $value = $this->asLivingAccommodation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mileage-allowance':
                $value = $this->asMileageAllowance()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'car':
                $value = $this->asCar()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vans':
                $value = $this->asVans()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'loan':
                $value = $this->asLoan()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'medical':
                $value = $this->asMedical()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'relocation':
                $value = $this->asRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'services':
                $value = $this->asServices()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'asset-available':
                $value = $this->asAssetAvailable()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-class-1a':
                $value = $this->asOtherClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-non-class-1a':
                $value = $this->asOtherNonClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-paid-not-deducted':
                $value = $this->asTaxPaidNotDeducted()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-travel-and-subsistence':
                $value = $this->asExpensesTravelAndSubsistence()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-entertainment':
                $value = $this->asExpensesEntertainment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-home-telephone':
                $value = $this->asExpensesHomeTelephone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-non-qualifying-relocation':
                $value = $this->asExpensesNonQualifyingRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-other':
                $value = $this->asExpensesOther()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'asset-transferred':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred::jsonDeserialize($data);
                break;
            case 'payment':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemPayment::jsonDeserialize($data);
                break;
            case 'tax-on-notional-payments':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemTaxOnNotionalPayments::jsonDeserialize($data);
                break;
            case 'vouchers-or-credit-cards':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemVouchersOrCreditCards::jsonDeserialize($data);
                break;
            case 'living-accommodation':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemLivingAccommodation::jsonDeserialize($data);
                break;
            case 'mileage-allowance':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemMileageAllowance::jsonDeserialize($data);
                break;
            case 'car':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemCar::jsonDeserialize($data);
                break;
            case 'vans':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemVans::jsonDeserialize($data);
                break;
            case 'loan':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemLoan::jsonDeserialize($data);
                break;
            case 'medical':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemMedical::jsonDeserialize($data);
                break;
            case 'relocation':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemRelocation::jsonDeserialize($data);
                break;
            case 'services':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemServices::jsonDeserialize($data);
                break;
            case 'asset-available':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemAssetAvailable::jsonDeserialize($data);
                break;
            case 'other-class-1a':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemOtherClass1A::jsonDeserialize($data);
                break;
            case 'other-non-class-1a':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemOtherNonClass1A::jsonDeserialize($data);
                break;
            case 'tax-paid-not-deducted':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemTaxPaidNotDeducted::jsonDeserialize($data);
                break;
            case 'expenses-travel-and-subsistence':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemExpensesTravelAndSubsistence::jsonDeserialize($data);
                break;
            case 'expenses-entertainment':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemExpensesEntertainment::jsonDeserialize($data);
                break;
            case 'expenses-home-telephone':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemExpensesHomeTelephone::jsonDeserialize($data);
                break;
            case 'expenses-non-qualifying-relocation':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemExpensesNonQualifyingRelocation::jsonDeserialize($data);
                break;
            case 'expenses-other':
                $args['value'] = GbP11DItemsListDeclarationsResponseItemsItemItemExpensesOther::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
