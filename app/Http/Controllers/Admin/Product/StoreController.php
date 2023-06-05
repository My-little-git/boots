<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests\Admin\Product\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $req)
    {
        $data = $req->validated();

        $this->service->store($data);

        return redirect()->route('admin.product.index');
    }
}
