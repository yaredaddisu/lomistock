<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class StockInResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'reference' => $this->reference,

            'productName' => $this->productName,
            'barCode' => $this->barCode,
            'house_id' => $this->house_id,
            'creator' => $this->creator,
            'purchasePrice' => $this->purchasePrice,
            'salesPrice' => $this->salesPrice,
            'previous' =>$this->previous,
            'quantity' => $this->quantity,
            'remaining' =>$this->remaining,
            'Transaction' => $this->Transaction,
            'cart_date' =>Carbon::parse($this->created_at)->toDateString(),
            'created_at' => (new DateTime($this->created_at))->format('D M, Y-m-d '),
         ];
    }
}
