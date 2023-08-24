<?php

namespace App\Http\Controllers\Backside\Admin\ProductInformation;

use App\Action\Product\CreateProduct;
use App\Action\Product\FindProduct;
use App\Action\Product\UpdateProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
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
        $product = (new FindProduct(['product_id' => $product_id]))->execute();

        return view('backside.pages.admin.manage-product.detail', compact('product'));
    }

    /**
     * display edit product page.
     *
     * @param int $product_id
     * @return View
     */
    public function editProductView($product_id): View
    {
        $product = (new FindProduct(['product_id' => $product_id]))->execute();

        return view('backside.pages.admin.manage-product.edit', compact('product'));
    }

    /**
     * do some updated with products data.
     *
     * @param int $product_id
     * @return RedirectResponse
     */
    public function updateProductAction(UpdateProductRequest $request, $product_id)
    {
        $data = $request->validated();
        $data['product_image'] = $data['product_image'] ?? null;
        $data['product_id'] = $product_id;

        $update_product_action = (new UpdateProduct($data))->execute();

        return redirect()->route('admin.manage-product.index-view')->with('success', $update_product_action->message);
    }
}
