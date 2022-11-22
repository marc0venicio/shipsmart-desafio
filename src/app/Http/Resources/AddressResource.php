<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "cep" => $this->CEP,
            "estado" => $this->estado,
            "cidade" => $this->cidade,
            "bairro" => $this->bairro,
            "rua" => $this->rua,
            "numero" => $this->numero,
            "telephone" => new ContactResource($this->contact),
            "created_at" => $this->created_at
        ];
    }
}
