<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;


/**
 * Class CompanyController
 * @package App\Http\Controllers
 */
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Company::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyRequest $request
     * @return mixed
     */
    public function store(CompanyRequest $request)
    {
        $company = Company::create($request->validated());
        return $company;
    }


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $company = Company::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->fill($request->except(['companies_id']));
        $company->save();
        return response()->json($company);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        if ($company->delete()) return response(null, 204);
    }
}
