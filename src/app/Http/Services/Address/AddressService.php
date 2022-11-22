<?php
namespace App\Http\Services\Address;

use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AddressService {

    public function store(array $parameters) {
        
        try {
            //code...
            DB::beginTransaction();

            $address = Address::query()->create([
                'CEP' => $parameters['cep'],
                'nome' => $parameters['nome'],
                'estado' => $parameters['estado'],
                'cidade' => $parameters['cidade'],
                'bairro' => $parameters['bairro'],
                'rua' => $parameters['rua'],
                'numero' => $parameters['numero']
            ]);

            $this->storeContact($parameters['contact'], $address, $address->id);

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollBack();

            throw $th;
        }
    }

    public function storeContact($parameters, Address $address) {
        foreach ($parameters as $telephones) {
            $telephonesParameters = [
                'telephone' => $telephones
            ];

            $address->contact()->create($telephonesParameters);
        }
    }


    public function update(array $parameters, Address $address){

        try {
            DB::beginTransaction();

            $address->nome = $parameters['nome'];
            $address->CEP = $parameters['cep'];
            $address->estado = $parameters['estado'];
            $address->cidade = $parameters['cidade'];
            $address->bairro = $parameters['bairro'];
            $address->rua = $parameters['rua'];
            $address->numero = $address['numero'];

            $address->save();

            foreach ($parameters['contact'] as $telephones) {
                $telephonesParameters = [
                    'telephone' => $telephones
                ];
                $address->contact()->updateOrCreate($telephonesParameters);
            }

            DB::commit();

        } catch (\Throwable $th) {

            DB::rollBack();

            throw $th;
        }
    }

    public function buscaCep(string $cep) {
        $response = Http::get('https://cep.awesomeapi.com.br/json/'.$cep);
        // dd($response->json());
        return $response->json();
    }

    public function delete(Address $address){
        return $address->delete();
    }
}