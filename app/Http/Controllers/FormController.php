<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        $dados = Form::first();

        // if ($dados == null) {
        //     $dados->nome = '';
        //     $dados->idade = '';
        //     $dados->rua = '';
        //     $dados->numero = '';
        //     $dados->comple = '';
        //     $dados->bairro = '';
        //     $dados->estado = '';
        //     $dados->biografia = '';
        // }

        // dd($dados);

        return view('index')->with('dados', $dados);
    }


    public function salvarDados(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required|string|max:255',
                'idade' => 'required|integer|min:1|max:150',
                'rua' => 'required|string|max:255',
                'numero' => 'required|integer|min:1',
                'comple' => 'nullable|string|max:255',
                'bairro' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'biografia' => 'nullable|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Verificar se é uma imagem válida
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e);
        }

        if ($request->comple == null) {
            $complemento = 'Sem complemento';
        } else {
            $complemento = $request->comple;
        };

        if ($request->biografia == null) {
            $biografia = 'Sem biografia';
        } else {
            $biografia = $request->biografia;
        };

        // Salvar os dados no banco de dados
        $form = new Form();
        $form->nome = $request->nome;
        $form->idade = $request->idade;
        $form->rua = $request->rua;
        $form->numero = $request->numero;
        $form->comple = $complemento;
        $form->bairro = $request->bairro;
        $form->estado = $request->estado;
        $form->biografia = $biografia;

        $form->save();

        return redirect('/')->with('success', 'Dados salvos com sucesso!');
    }

    public function atualizarDados(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required|string|max:255',
                'idade' => 'required|integer|min:1|max:150',
                'rua' => 'required|string|max:255',
                'numero' => 'required|integer|min:1',
                'comple' => 'nullable|string|max:255',
                'bairro' => 'required|string|max:255',
                'estado' => 'required|string|max:255',
                'biografia' => 'nullable|string',
                'imagem' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Verificar se é uma imagem válida
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e);
        }

        if ($request->comple == null) {
            $complemento = 'Sem complemento';
        } else {
            $complemento = $request->comple;
        };

        if ($request->biografia == null) {
            $biografia = 'Sem biografia';
        } else {
            $biografia = $request->biografia;
        };

        $form = Form::first();
        $form->nome = $request->nome;
        $form->idade = $request->idade;
        $form->rua = $request->rua;
        $form->numero = $request->numero;
        $form->comple = $complemento;
        $form->bairro = $request->bairro;
        $form->estado = $request->estado;
        $form->biografia = $biografia;

        $form->update();

        return redirect('/')->with('success', 'Dados atualizados com sucesso!');
    }
}
