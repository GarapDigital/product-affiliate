<?php

namespace App\Http\Controllers\Backside\Admin\ProductInformation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
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
        return view('backside.pages.admin.manage-product.index');
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
