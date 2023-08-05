<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\StoreRating;
use Illuminate\Http\Request;

class StoreRatingController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'store_id' => 'required|exists:stores,id',
      'rating' => 'required|integer|between:1,5',
      'comment' => 'nullable|string',
    ]);

    $rating = StoreRating::create($request->all());

    return response()->json(['message' => 'Rating added successfully', 'data' => $rating], 201);
  }

  public function show($storeId)
  {
    $store = Store::findOrFail($storeId);
    $ratings = $store->ratings()->orderBy('created_at', 'desc')->get();

    $totalRatings = $ratings->count();
    $averageRating = $totalRatings > 0 ? round($ratings->sum('rating') / $totalRatings, 1) : 0;

    return response()->json(['store' => $store, 'averageRating' => $averageRating, 'totalRatings' => $totalRatings], 200);
  }
}
