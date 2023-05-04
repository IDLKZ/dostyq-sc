<?php

namespace App\Exports;

use App\Models\Query;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class QueriesExport implements FromQuery, WithHeadings, WithMapping, WithColumnWidths
{
    use Exportable;
    public $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function headings(): array
    {
        return [
//            '#',
            'Фамилия',
            'Имя',
            'Отчество',
//            '',
            'ИИН',
//            '',
//            '',
            'Адрес',
            'Почта',
            'Телефон',
//            '',
//            '',
//            '',
//            '',
            'Гражданство',
            'ОП',
//            '',
            'Образования',
            'Форма обучения',
            'Адрес проживания',
            'Дата создания',
//            '',
        ];
    }

    public function map($row): array
    {
        return [
//            $row->id,
            $row->surname,
            $row->name,
            $row->middlename,
//            $row->birthday,
            $row->iin,
//            $row->number_card_id,
//            $row->date_card_id,
            $row->address,
            $row->email,
            $row->phone,
//            $row->photo_url,
//            $row->photo_card_url,
//            $row->photo_diploma_url,
//            $row->reference_075_url,
            $row->country->title_ru,
            $row->eps->title_ru,
//            $row->language_id,
            $row->educationType->title_ru,
            $row->educationForm->title_ru,
            $row->region->title_ru,
            $row->created_at->format('d-m-Y')
        ];
    }

    public function query()
    {
        return Query::searchable($this->query, true);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'I' => 60,
            'E' => 55,
            'F' => 15,
            'G' => 15,
            'J' => 15,
            'H' => 15,
            'K' => 20,
            'L' => 20
        ];
    }
}
