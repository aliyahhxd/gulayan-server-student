<?php

namespace App\Http\Controllers;

use App\Models\PlantModel;
use Illuminate\Http\Request;
use \Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class PlantController extends Controller
{
  public function index()
  {
    // 🌱 Get records (with pagination)
    return PlantModel::paginate(10);
  }

  public function store(Request $request)
  {
    // 🌱 Save record
    return PlantModel::create($request->all());
  }

  public function show(PlantModel $plantController)
  {
    return $plantController;
  }

  public function update(Request $request, PlantModel $plantController)
  {
    // 🌱 Update record
    $plantController->update($request->all());

    return $plantController;
  }

  public function destroy(PlantModel $plant)
  {
    // 🌱 Delete record
    return PlantModel::destroy($plant->id);
  }
}