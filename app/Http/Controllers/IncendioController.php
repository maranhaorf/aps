<?php

namespace App\Http\Controllers;

use App\Models\Incendio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\API\ApiError;


class IncendioController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = Incendio::all();
        return Response::json($data);
    }

    public function show($id)
    {
        $incendio = Incendio::find($id);

        if (!$incendio)
            return response()->json(['error' => 'Incendio Não encontrado']);

        return Response::json($incendio);
    }

    public function store(Request $request)
    {
        try {
            Incendio::create($request->all());
            return response()->json(['sucess' => 'Incendio Cadastrado']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Incendio Não Cadastrado']);
        }
    }

    public function update(Request $request, $id)
    {

        try {

            Incendio::where('id', $id)->update($request->all());
            return response()->json(['sucess' => 'Incendio Alterado']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Incendio Não Alterado']);
        }
    }

    public function destroy($id)
    {
        try {

            $incendio = Incendio::find($id);

            $incendio->delete();
            return response()->json(['sucess' => 'Incendio Apagado']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Incendio Não Apagado']);
        }
    }
}
