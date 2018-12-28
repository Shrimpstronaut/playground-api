<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @param null $id
     * @return array
     */
    public function rules($id = null)
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('accounts')->ignore($id)
            ],
            'givenname' => 'max:25',
            'surname' => 'max:25',
            'username' => [
                'required',
                'max:30',
                Rule::unique('accounts')->ignore($id),
            ],
            'bio' => 'max:200',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Account::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules());

        $account = new Account($request->all());
        $account->save();
        return response()->json($account);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Account::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules($id));

        $account = Account::findOrFail($id);
        $account->fill($request->all());
        $account->save();
        return response()->json($account);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return response()->json(Account::destroy($id));
    }
}
