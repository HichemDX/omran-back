<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerNotification as ResourcesCustomerNotification;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiCustomerNotificationController extends Controller
{
    // API

    public function api_notifications (Request $request) {
        return response(ResourcesCustomerNotification::collection($request->user('sanctum')->notifications()->with('store')->orderBy('created_at', 'desc')->with('store')->get()), 200);
    }

    public function api_read_notification (Request $request) {
        $notification_id = $request->input('notification_id');

        $notification = $request->user('sanctum')->notifications()->where('id', '=', $notification_id)->first();
        try{
            $notification->read = true;
            $notification->save();
            return response(['result' => true, 'error' => null], 201);
        } catch(ModelNotFoundException $e){
            return response(['result' => false, 'error' => $e->getMessage()], 404);
        }
        catch(HttpExceptionInterface $e){
            return response(['result' => false, 'error' => $e->getMessage()], $e->getStatusCode());
        }
    }


}
