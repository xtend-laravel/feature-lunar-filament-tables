<?php

namespace XtendLunar\Features\FilamentTables;

use CodeLabX\XtendLaravel\Base\XtendFeatureProvider;
use Livewire\Livewire;

class FilamentTablesProvider extends XtendFeatureProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminhub');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'adminhub');
    }

    public function boot()
    {
        $this->registerTableComponents();
    }

    /**
     * Register the table components
     *
     * @return void
     */
    protected function registerTableComponents(): void
    {
        collect([
            /** @see \Lunar\Hub\Http\Livewire\Components\Orders\OrdersTable */
            'hub.components.orders.table' => 'Orders\OrdersTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Customers\CustomersTable */
            'hub.components.customers.table' => 'Customers\CustomersTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Products\Tables\ProductsTable */
            'hub.components.products.table' => 'Products\Tables\ProductsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Products\Tables\ProductTypesTable */
            'hub.components.products.product-types.table' => 'Products\Tables\ProductTypesTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Products\Tables\ProductVariantsTable */
            'hub.components.products.variants.table' => 'Products\Tables\ProductVariantsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Brands\BrandsTable */
            'hub.components.brands.table' => 'Brands\BrandsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\ActivityLogTable */
            'hub.components.settings.activity-log.table' => 'Settings\Tables\ActivityLogTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\AttributesTable */
            'hub.components.settings.attributes.table' => 'Settings\Tables\AttributesTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\ChannelsTable */
            'hub.components.settings.channels.table' => 'Settings\Tables\ChannelsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\StaffTable */
            'hub.components.settings.staff.table' => 'Settings\Tables\StaffTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\LanguagesTable */
            'hub.components.settings.languages.table' => 'Settings\Tables\LanguagesTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\TagsTable */
            'hub.components.settings.tags.table' => 'Settings\Tables\TagsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\CurrenciesTable */
            'hub.components.settings.currencies.table' => 'Settings\Tables\CurrenciesTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\AddonsTable */
            'hub.components.settings.addons.table' => 'Settings\Tables\AddonsTable',
            /** @see \Lunar\Hub\Http\Livewire\Components\Settings\Tables\TaxZonesTable */
            'hub.components.settings.taxes.tax-zones.table' => 'Settings\Tables\TaxZonesTable',
        ])->each(function ($viewClass, $alias) {
            $namespace = config('lunar-hub.system.components_namespace.tables', 'Lunar\\Hub\\Http\\Livewire\\Components');
            $component = $namespace.'\\'.$viewClass;
            if (! class_exists($component)) {
                $component = 'Lunar\\Hub\\Http\\Livewire\\Components\\'.$viewClass;
            }
            Livewire::component($alias, $component);
        });
    }
}
