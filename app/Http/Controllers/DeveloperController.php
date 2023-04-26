<?php

namespace App\Http\Controllers;

use App\Models\DeveloperModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $developers = new DeveloperModel();

        if ($request->input('page')) {
            return response()->json([
                'code' => 200,
                'message' => (array()),
                $developers->searchByTerms($request)
            ]);
        }

        return response()->json([
            'code' => 200,
            'message' => (array()),
            $developers->searchByTerms($request)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse|int
     */
    public function store(Request $request): JsonResponse|int
    {
        $requestValidator = Validator::make($request->all(), [
            'nome' => 'required',
            'sexo' => 'required',
            'idade' => 'required',
            'hobby' => 'required',
            'datanascimento' => 'required'
        ]);

        if ($requestValidator->fails()) {
            return response()->json([
                'code' => 400,
                'message' => $requestValidator->errors()->toArray(),
                'data' => (array())
            ], 400);
        } else {
            $developers = new DeveloperModel();
            $developers->persistNewDeveloper($request);
            return response()->json([
                'code' => 201,
                'message' => (array()),
                'data' => (array())
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $developers = new DeveloperModel();
        if ($developers->getDeveloperById($id)) {
            return response()->json([
                'code' => 200,
                'message' => (array()),
                'data' => (array($developers->getDeveloperById($id)))
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'message' => [
                    'errors' => 'Developer not found in database'
                ],
                'data' => (array())
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $requestValidator = Validator::make($request->all(), [
            'nome' => 'required',
            'sexo' => 'required',
            'idade' => 'required',
            'hobby' => 'required',
            'datanascimento' => 'required'
        ]);

        if ($requestValidator->fails()) {
            return response()->json([
                'code' => 400,
                'message' => $requestValidator->errors()->toArray(),
                'data' => (array())
            ], 400);

        } else {
            $developers = new DeveloperModel();
            if ($developers->getDeveloperById($id)) {
                $developers->updateDeveloper($request, $id);
                return response()->json([
                    'code' => 200,
                    'message' => (array()),
                    'data' => (array())
                ]);
            } else {
                return response()->json([
                    'code' => 400,
                    'message' => 'ID não encontrado no banco de dados',
                    'data' => (array())
                ], 400);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $developers = new DeveloperModel();

        if ($developers->getDeveloperById($id)) {
            $developers->deleteDeveloperById($id);
            return response()->json([], 204);
        } else {
            return response()->json([
                'code' => 400,
                'message' => [
                    'errors' => 'ID not found in database'
                ],
                'data' => (array())
            ], 400);
        }

    }
}
