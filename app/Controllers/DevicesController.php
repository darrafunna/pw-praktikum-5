<?php

namespace App\Controllers;

use App\Models\DevicesModel;

class DevicesController extends BaseController
{
    protected $devicesModel;

    public function __construct()
    {
        $this->devicesModel = new DevicesModel();
    }

    public function index()
    {
        $devices = $this->devicesModel->findAll();

        $data = [
            'title' => 'Devices | MonitorDev',
            'devices' => $devices
        ];

        return view('/pages/devices', $data);
    }
}
