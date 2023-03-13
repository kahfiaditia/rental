<?php

namespace App\Helper;

use RealRashid\SweetAlert\Facades\Alert;

class AlertHelper
{

    public static function addAlert($info)
    {
        if ($info) {
            return Alert::success('Succes', "Succes");
        } else {
            return Alert::error('Fail', "Fail");
        }
    }

    public static function updateAlert($info)
    {
        if ($info) {
            return Alert::success('Succes', "Succes");
        } else {
            return Alert::error('Fail', "Fail");
        }
    }

    public static function deleteAlert($info)
    {
        if ($info) {
            return Alert::success('Succes', "Succes");
        } else {
            return Alert::error('Fail', "Fail");
        }
    }

    public static function alertDinamis($info, $message)
    {
        if ($info) {
            Alert::success('Succes', $message);
        } else {
            Alert::error('Fail', $message);
        }
    }
}
