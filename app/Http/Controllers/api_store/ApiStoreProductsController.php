<?php

namespace App\Http\Controllers\api_store;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Image;

class ApiStoreProductsController extends Controller
{
    
    public function products (Request $request) {
        $category_id = $request->input('category');
        $response = Product::where('store_id' ,'=', $request->user('sanctum')->id)->where(function ($q) use($category_id) {
            if ($category_id) {
                $q->whereHas('categories', function ($qu) use($category_id){
                    return $qu->where('category_id', '=', $category_id);
                });
            }
        })->with('images', 'unite', 'store', 'categories')->paginate(50);
        return response(ResourcesProduct::collection($response), 200);
    }

    public function delete (Request $request) {
        $product_id = $request->input('product_id');
        $product = $request->user('sanctum')->products()->where('id', '=', $product_id)->first();
        if($product){
            $product->delete();
            return response(1, 200);
        }
        else return response(0, 404);
    }

    public function store (Request $request) {
        try{
            $fields = $request->validate([
                'unit' => 'required|integer',
                'title' => 'required|string',
                'description' => 'string',
                'category' => 'required_without:sub_category|integer|nullable',
                'sub_category' => 'required_without:category|integer|nullable',
                'price' => 'required|integer',
                'images' => 'array|min:1',
                'images.*' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:5000',
            ]);

            $list_file_paths = [];
            $user = $request->user('sanctum');
            if ($request->files->has('images')) {
                $files = $request->files->get('images');
                foreach ($files as $file) {
                    $imageName = uniqid().$file->getClientOriginalName();

                    //$path = Storage::putFileAs('public/images/products/store_'.$user->id.'/', $file, $imageName);
                    $image = Image::make($file);
                    $image->resize(1000, 1000, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    if (!file_exists(storage_path('app/public/images/products/store_'.$user->id))) { //Verify if the directory exists
                        mkdir(storage_path('app/public/images/products/store_'.$user->id), 0775, true); //create it if do not exists
                    }
                    $image->save(storage_path('app/public/images/products/store_'.$user->id.'/'.$imageName), 80);

                    array_push($list_file_paths, 'storage/images/products/store_'.$user->id.'/'.$imageName);
                }
            }

            $product = $user->products()->create([
                //'store_id' => $user->id,
                'unite_id' => $fields['unit'],
                'name' => $fields['title'],
                'description' => $fields['description'],
                'price' => $fields['price'],
                'qty' => $request->input('qty') ? $request->input('qty') : 0,
                'min_qty' => $request->input('min_qty') ? $request->input('min_qty') : 0,
            ]);
            foreach ($list_file_paths as $file_path) {
                $product->images()->create([
                    'name' => $file_path
                ]);
            }
            if($request->input('category')){
                $product->categories()->attach([
                    'category_id' => $fields['category']
                ]);
            }
            if($request->input('sub_category')){
                $product->categories()->attach([
                    'category_id' => $fields['sub_category']
                ]);
            }
            $prod = Product::where('id', '=', $product->id)->with('images', 'unite', 'store', 'categories')->first();
            return response(['result' => true, 'error' => null, 'product' => new ResourcesProduct($prod)]);
        } catch(ModelNotFoundException $e){
            return response(['result' => false, 'error' => $e->getMessage()], 404);
        }
        catch(HttpExceptionInterface $e){
            return response(['result' => false, 'error' => $e->getMessage()], $e->getStatusCode());
        }        
    }

    public function update (Request $request) {
        try{
            
            $fields = $request->validate([
                'product_id' => 'required|integer',
                'unit' => 'required|integer',
                'title' => 'required|string',
                'description' => 'string',
                'category' => 'required|integer',
                'sub_category' => 'integer',
                'price' => 'required|integer',
                'images' => 'array|min:1',
                'images.*' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:5000',
            ]);

            //$list_file_paths = [];
            $user = $request->user('sanctum');

            $product = $user->products()->findOrFail($fields['product_id']);
            $product->update([
                //'store_id' => $user->id,
                'unite_id' => $fields['unit'],
                'name' => $fields['title'],
                'description' => $fields['description'],
                'price' => $fields['price'],
                'qty' => $request->input('qty') ? $request->input('qty') : 0,
                'min_qty' => $request->input('min_qty') ? $request->input('min_qty') : 0,
            ]);

            $list_file_paths = [];
            $user = $request->user('sanctum');
            if ($request->files->has('images')) {
                $files = $request->files->get('images');
                foreach ($files as $file) {
                    $imageName = uniqid().$file->getClientOriginalName();

                    //$path = Storage::putFileAs('public/images/products/store_'.$user->id.'/', $file, $imageName);
                    $image = Image::make($file);
                    $image->resize(1000, 1000, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $image->save(storage_path('app/public/images/products/store_'.$user->id.'/'.$imageName), 80);

                    array_push($list_file_paths, 'storage/images/products/store_'.$user->id.'/'.$imageName);
                }
            }

            //$product->images()->delete();

            foreach ($list_file_paths as $file_path) {
                $product->images()->create([
                    'name' => $file_path
                ]);
            }

            $product->categories()->detach();
            
            $product->categories()->attach([
                'category_id' => $fields['category']
            ]);
            if($request->input('sub_category')){
                $product->categories()->attach([
                    'category_id' => $request->input('sub_category')
                ]);
            }
            /*
            foreach ($list_file_paths as $file_path) {
                $product->images()->create([
                    'name' => $file_path
                ]);
            }
            */
            return response(['result' => true, 'error' => null]);
        } catch (\Exception $e) {
            return response(['result' => false, 'error' => $e->getMessage()], 404);
        }        
    }



}

