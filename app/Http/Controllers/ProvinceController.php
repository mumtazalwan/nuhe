<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ProvinceController extends Controller
{
    /**
     * Menampilkan daftar semua provinsi.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        try {
            $provinceData = Province::all();

            return response()->json([
                'success' => true,
                'message' => 'List data Province',
                'error' => null,
                'province' => $provinceData,
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Server sedang error',
                'error' => $th->getMessage(),
                'province' => null,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Menambahkan data provinsi baru.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'province_name' => ['', 'string'],
            'capital' => ['', 'string'],
            'local_language' => ['', 'string'],
            'island' => ['', 'string'],
            'population' => ['', 'integer'],
            'ethnic' => ['', 'string'],
            'regional_house' => ['', 'string'],
            'regional_house_image' => ['', 'string'],
            'dance' => ['', 'string'],
            'dance_image' => ['', 'string'],
            'weapon' => ['', 'string'],
            'weapon_image' => ['', 'string'],
            'music' => ['', 'string'],
            'music_image' => ['', 'string'],
            'tradition' => ['', 'string'],
            'flash_info' => ['', 'text'],
            // 'more_detail' => ['', 'text'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Valid',
                'error' => $validator->errors()->first(),
                'province' => null,
            ]);
        }

        try {
            $provinceData = Province::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Ditambahkan',
                'province' => $provinceData,
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Server sedang error',
                'error' => $th->getMessage(),
                'province' => null,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Menampilkan detail provinsi.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        try {
            $provinceData = Province::find($id);

            if (!$provinceData) {
                return response()->json([
                    'success' => false,
                    'message' => 'Province Tidak Ditemukan',
                    'province' => null,
                ], Response::HTTP_NOT_FOUND);
            }

            return response()->json([
                'success' => true,
                'message' => 'Detail Province',
                'province' => $provinceData,
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Server sedang error',
                'error' => $th->getMessage(),
                'province' => null,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Menghapus provinsi dari database.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        $provinceData = Province::find($id);

        if (!$provinceData) {
            return response()->json([
                'success' => false,
                'message' => 'Province Tidak Ditemukan',
                'province' => null,
            ], Response::HTTP_NOT_FOUND);
        }

        try {
            // Hapus provinsi dari database
            $provinceData->delete();

            return response()->json([
                'success' => true,
                'message' => 'Province Berhasil Dihapus',
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Server sedang error',
                'error' => $th->getMessage(),
                'province' => null,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
