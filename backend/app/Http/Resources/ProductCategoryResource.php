<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'short_name' => $this->short_name,
            'description' => $this->description,
            'parent_category_name' => $this->parent_category?$this->parent_category->name:null,
            'company_name' => $this->company->name,

            'creator_user_name' => $this->creator_user->name,
            'updator_user_name' => $this->updator_user ? $this->updator_user->name : null,
            'href' => [
                'product_category' => route('product-categories.show', $this),
            ],
        ];
    }
}
