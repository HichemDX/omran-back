<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourcesStoreNotification;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiStoreNotificationController extends Controller
{
    
    public function api_notifications (Request $request) {
        return response(ResourcesStoreNotification::collection($request->user('sanctum')->notifications()->orderBy('created_at', 'desc')->with('customer')->get()), 200);
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
