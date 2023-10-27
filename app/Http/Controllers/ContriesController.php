<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contries;

class ContriesController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request): string
    {
        // починить валидацию
//        $request->validate([
//            'test' => 'required|string',
//            'name_ru' => 'required|string',
//            'name_en' => 'required|string',
//            'deleted' => 'bool',
//        ]);

        $receiveData = [
            'uid' => $request->json('uid'),
            'name_ru' => $request->json('name_ru'),
            'name_en' => $request->json('name_en'),
            'deleted' => (boolean)$request->json('deleted'),
        ];

        $result = Contries::create($receiveData);
// @todo не успеваю добавить обработку ошибки и пофиксить локали
        return response()->json($result->replicate());

    }
}
