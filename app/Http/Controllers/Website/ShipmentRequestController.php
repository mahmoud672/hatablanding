<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ShipmentRequest\ShipmentRequest;
use Illuminate\Http\Request;

class ShipmentRequestController extends Controller
{

    public function storeRequest(Request $request)
    {

        //return $request->rate;
        $this->validate($request,[
            'name'      => 'required',
            'phone'     => 'required|min:8|max:15',
            'address'   => 'required',
            'activity'  => 'required',
            'other_activity'  => 'required_if:activity,أخرى',
            'have_sample'   => 'required|in:0,1',
            'offer_value'   => 'required',
            'rate'          => 'required|in:1,2,3,4,5',
            'feedback'      => 'required',
            'vendor_name'   => 'required',
            'notes'         => 'required',

        ],[
            'required'  => 'هذا الحقل مطلوب',
            'min'  => 'على الأقل مطلوب 8',
            'max'  => 'على الأكثر مطلوب 15',
        ],[

        ]);

        try
        {
            $shipment = new ShipmentRequest();
            $shipment->name             = $request->name;
            $shipment->phone            = $request->phone;
            $shipment->address          = $request->address;
            $shipment->activity         = $request->activity;
            $shipment->other_activity   = $request->other_activity;
            $shipment->is_having_sample      = $request->have_sample;
            $shipment->offer_value      = $request->offer_value;
            $shipment->rate             = $request->rate;
            $shipment->feedback         = $request->feedback;
            $shipment->vendor_name      = $request->vendor_name;
            $shipment->notes            = $request->notes;
            $shipment->latitude         = $request->latitude;
            $shipment->longitude        = $request->longitude;
            $shipment->save();

            return back()->with("create","تم ارسال طلبك بنجاح");
        }
        catch (\Exception $exception)
        {
            return $exception;
        }

    }

}
