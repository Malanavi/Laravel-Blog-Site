<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class ServiceService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('/images/services', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $service)
    {
        try {
            DB::beginTransaction();

            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images/services', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images/services', $data['main_image']);
            }
            $service->update($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $service;
    }
}
