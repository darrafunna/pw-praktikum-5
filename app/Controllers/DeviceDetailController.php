<?php

namespace App\Controllers;

use App\Models\DeviceDetailModel;

class DeviceDetailController extends BaseController
{
    protected $deviceDetailModel;

    public function __construct()
    {
        $this->deviceDetailModel = new DeviceDetailModel();
    }

    public function index()
    {
        $detail = $this->deviceDetailModel->findAll();

        $data = [
            'title' => 'Details | MonitorDev',
            'detail' => $detail
        ];
        return view('/pages/details', $data);
    }
}
