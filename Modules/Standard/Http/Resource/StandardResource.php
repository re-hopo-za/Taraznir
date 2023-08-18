<?php

namespace Modules\Standard\Http\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class StandardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
