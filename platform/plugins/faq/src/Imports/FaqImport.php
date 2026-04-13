<?php

namespace Botble\Faq\Imports;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Faq\Models\Faq;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FaqImport implements ToModel, WithHeadingRow
{
 public function model(array $row)
    {
        return new Faq([
            'question'      => $row['project_name'] ?? 'Imported Project', 
            'plot'          => $row['plot'] ?? null,
            'area'          => $row['area'] ?? null,
            'price'         => $row['price'] ?? 0,
            'area_sq_yard'  => $row['area_sq_yard'] ?? null,
            'area_sq_ft'    => $row['area_sq_ft'] ?? null,
            'price_sq_yard' => $row['price_sq_yard'] ?? null,
            'price_sq_ft'   => $row['price_sq_ft'] ?? null,
            'plot_status'   => $row['plot_status'] ?? 'available',
            'north'         => $row['north'] ?? null,
            'south'         => $row['south'] ?? null,
            'east'          => $row['east'] ?? null,
            'west'          => $row['west'] ?? null,
            'client'        => $row['client'] ?? null,
            'answer'        => $row['answer'] ?? 'N/A',
            'category_id'   => $row['category_id'] ?? null,
            'status'        => $row['status'] ?? BaseStatusEnum::PUBLISHED,
        ]);
    }
}