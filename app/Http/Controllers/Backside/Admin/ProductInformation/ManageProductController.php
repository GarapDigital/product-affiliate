<?php

namespace App\Http\Controllers\Backside\Admin\ProductInformation;

use App\Action\Product\CreateProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ManageProductController extends Controller
{
    /**
     * display product page.
     *
     * @return View
     */
    public function indexProductView(): View
    {
        $products = Product::latest()->get();

        return view('backside.pages.admin.manage-product.index', compact('products'));
    }

    /**
     * display product create form page.
     *
     * @return View
     */
    public function createProductForm(): View
    {
        return view('backside.pages.admin.manage-product.create');
    }

    /**
     * do some action for creating product.
     *
     * @return RedirectResponse
     */
    public function storeProductAction(CreateProductRequest $request): RedirectResponse
    {
        $product_action = (new CreateProduct($request->validated()))->execute();

        return redirect()->route('admin.manage-product.index-view')->with('success', $product_action->message);
    }

    /**
     * display detail product page.
     *
     * @param int $product_id
     * @return View
     */
    public function detailProductView($product_id): View
    {
        return view('backside.pages.admin.manage-product.detail');
    }

    /**
     * display edit product page.
     *
     * @param int $product_id
     * @return View
     */
    public function editProductView($product_id): View
    {
        return view('backside.pages.admin.manage-product.edit');
    }
}
