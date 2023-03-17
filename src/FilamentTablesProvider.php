<?php

namespace XtendLunar\Features\FilamentTables;

use CodeLabX\XtendLaravel\Base\XtendFeatureProvider;
use Livewire\Livewire;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\BrandsTable;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\CustomersTable;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\OrdersTable;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\ProductsTable;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\ProductTypesTable;
use XtendLunar\Features\FilamentTables\Livewire\Components\Tables\ProductVariantsTable;

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

    protected function registerTableComponents(): void
    {
        Livewire::component('hub.components.brands.table', BrandsTable::class);
        Livewire::component('hub.components.customers.table', CustomersTable::class);
        Livewire::component('hub.components.orders.table', OrdersTable::class);
        Livewire::component('hub.components.products.table', ProductsTable::class);
        Livewire::component('hub.components.products.product-types.table', ProductTypesTable::class);
        Livewire::component('hub.components.products.variants.table', ProductVariantsTable::class);
    }
}
