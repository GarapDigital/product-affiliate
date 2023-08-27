<?php

namespace App\Http\Controllers\Backside\Member\ProductLink;

use App\Action\ProductLink\CreateProductAffiliate;
use App\Action\ProductLink\CreateUserProductAffiliate;
use App\Action\ProductLink\GenerateProductLink;
use App\Action\ProductLink\UpdateProductLink;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductLink\GenerateProductLinkRequest;
use App\Models\Product;
use App\Models\ProductAffiliate;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ManageProductLinkController extends Controller
{
    /**
     * display related product link page.
     *
     * @return View
     */
    public function indexMemberProductLink(): View
    {
        $logged_member = User::with('productAffiliate')->where('id', auth()->id())->where('role', 'member')->first();
        $product_affiliates = $logged_member->productAffiliate()->with('product', 'member')->get();

        return view('backside.pages.member.product-link.index', compact('product_affiliates'));
    }

    /**
     * display generate product link page.
     *
     * @return View
     */
    public function generateProductLinkView(): View
    {
        $products = Product::latest()->get();

        return view('backside.pages.member.product-link.create', compact('products'));
    }

    /**
     * generate the product links.
     *
     * @return RedirectResponse
     */
    public function generateProductLinkAction(GenerateProductLinkRequest $request): RedirectResponse
    {
        $logged_member = User::with('productAffiliate')->where('id', auth()->id())->where('role', 'member')->first();
        $logged_member->productAffiliate()->create([
            'product_id' => $request->product_id,
            'product_affiliate_link' => route('a.show-related-product-view', [
                'affiliate_code' => Str::random(6),
            ]),
        ]);

        return redirect()->route('member.product-link.index-view')->with('success', 'Product Link Successfuly Generated');
    }

    /**
     * display edit form of product link page.
     *
     * @param int $product_link_id
     * @return View
     */
    public function editProductLinkView($product_link_id): View
    {
        $products = Product::latest()->get();
        $product_affiliate = ProductAffiliate::where('id', $product_link_id)->first();

        return view('backside.pages.member.product-link.edit', compact('products', 'product_affiliate', 'product_link_id'));
    }

    /**
     * do some update with products.
     *
     * @param int $product_link_id
     * @return RedirectResponse
     */
    public function updateProductLinkAction(GenerateProductLinkRequest $request, $product_link_id): RedirectResponse
    {
        $update_product_link_action = (new UpdateProductLink([
            'member_id' => auth()->id(),
            'product_id' => $request->product_id,
            'product_link_id' => $product_link_id,
        ]))->execute();

        return redirect()->route('member.product-link.index-view')->with('success', $update_product_link_action->message);
    }

    /**
     * display page related products with product link.
     *
     * @param int $product_link_id
     * @param int $product_id
     *
     * @return View
     */
    public function showRelatedProductView($product_link_id, $product_id): View
    {
        $product_affiliate = ProductAffiliate::with(['product' => function ($query) use ($product_id) {
            return $query->where('id', $product_id);
        }])->where('id', $product_link_id)->first();

        $related_product = $product_affiliate->product;

        return view('backside.pages.member.product-link.show-product', compact('related_product'));
    }
}
