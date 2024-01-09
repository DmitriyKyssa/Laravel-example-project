<?php

namespace App\Exports;

use App\Models\City;
use App\Models\Shop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ShopsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Shop::with('city:id,city_name') // предварительно загружаем данные о городе
        ->select('id', 'shop_name', 'city_id', 'address', 'number_of_employees')
            ->get()
            ->map(function ($shop) {
                // Присваиваем значение city_name полю city
                $shop->city_id = $shop->city->city_name ?? '';
                return $shop;
            });
    }

    public function headings(): array
    {
        return [
            'id',
            'Название магазина',
            'Город',
            'Адрес',
            'Количество работников',
        ];
    }
}
