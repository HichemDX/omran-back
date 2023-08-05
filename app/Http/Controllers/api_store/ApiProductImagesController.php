<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiProductImagesController extends Controller
{
    
    
    public function delete(Request $request, $id){
        try{
            $img = Image::findOrFail($id);
            $img->delete();
            return response(['result' => true, 'error' => null], 200);
        }
        catch(ModelNotFoundException $e){
            return response(['result' => false, 'error' => $e->getMessage()], 404);
        }
        catch(HttpExceptionInterface $e){
            return response(['result' => false, 'error' => $e->getMessage()], $e->getStatusCode());
        }
    }


}
