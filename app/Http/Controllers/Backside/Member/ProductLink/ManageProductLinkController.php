<?php

namespace App\Http\Controllers\Backside\Member\ProductLink;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ManageProductLinkController extends Controller
{
    /**
     * display related product link page.
     *
     * @return View
     */
    public function indexMemberProductLink(): View
    {
        return view('backside.pages.member.product-link.index');
    }

    /**
     * display generate product link page.
     *
     * @return View
     */
    public function generateProductLinkView(): View
    {
        return view('backside.pages.member.product-link.create');
    }

    /**
     * display edit form of product link page.
     *
     * @param int $product_link_id
     * @return View
     */
    public function editProductLinkView($product_link_id): View
    {
        return view('backside.pages.member.product-link.edit');
    }

    /**
     * display page related products with product link.
     *
     * @return View
     */
    public function showRelatedProductView(): View
    {
        return view('backside.pages.member.product-link.show-product');
    }
}
