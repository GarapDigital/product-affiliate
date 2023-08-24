<?php

use App\Http\Controllers\Backside\Admin\DashboardAdminController;
use App\Http\Controllers\Backside\Admin\LeadsInformation\ManageLeadsController;
use App\Http\Controllers\Backside\Admin\MemberInformation\ManageMemberController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberMutationController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberProductLinkController;
use App\Http\Controllers\Backside\Admin\MemberInformation\MemberWithdrawalRequestController;
use App\Http\Controllers\Backside\Admin\ProductInformation\ManageProductController;
use App\Http\Controllers\Backside\Admin\SystemSetting\ContactUsSettingController;
use App\Http\Controllers\Backside\Customer\CustomerAdminContactController;
use App\Http\Controllers\Backside\Customer\CustomerOrderTransactionHistoryController;
use App\Http\Controllers\Backside\Customer\DashboardCustomerController;
use App\Http\Controllers\Backside\Member\DashboardMemberController;
use App\Http\Controllers\Backside\Member\ProductLink\ManageProductLinkController;
use App\Http\Controllers\Backside\Member\UserFinance\ManageMemberMoneyController;
use App\Http\Controllers\Backside\Member\UserProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Admin Route Group Section
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'check-role:admin'], function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'dashboardAdminView'])->name('dashboard');

        Route::group(['prefix' => 'manage-member', 'as' => 'manage-member.'], function () {
            Route::get('/', [ManageMemberController::class, 'indexMemberView'])->name('index-view');
            Route::get('/withdrawal-request', [MemberWithdrawalRequestController::class, 'memberWithdrawalRequestView'])->name('withdrawal-request-view');
            Route::get('/{member_id}/edit', [ManageMemberController::class, 'editMemberView'])->name('edit-view');
            Route::get('/{member_id}/product-link', [MemberProductLinkController::class, 'memberProductLinkView'])->name('product-link-view');
            Route::get('/{member_id}/mutation', [MemberMutationController::class, 'memberMutationView'])->name('mutation-view');
        });

        Route::group(['prefix' => 'manage-product', 'as' => 'manage-product.'], function () {
            Route::get('/', [ManageProductController::class, 'indexProductView'])->name('index-view');
            Route::get('/create', [ManageProductController::class, 'createProductForm'])->name('create-view');
            Route::post('/create', [ManageProductController::class, 'storeProductAction'])->name('store-action');
            Route::get('/{product_id}/detail-product', [ManageProductController::class, 'detailProductView'])->name('detail-product-view');
            Route::get('/{product_id}/edit', [ManageProductController::class, 'editProductView'])->name('edit-product-view');
            Route::put('/{product_id}/update', [ManageProductController::class, 'updateProductAction'])->name('update-product-action');
        });

        Route::group(['prefix' => 'manage-lead', 'as' => 'manage-lead.'], function () {
            Route::get('/', [ManageLeadsController::class, 'manageLeadsPage'])->name('index-view');
        });

        Route::group(['prefix' => 'system-setting', 'as' => 'system-setting.'], function () {
            Route::group(['prefix' => 'contact-us-setting', 'as' => 'contact-us-setting.'], function () {
                Route::get('/', [ContactUsSettingController::class, 'contactUsSettingView'])->name('edit-view');
                Route::post('/update', [ContactUsSettingController::class, 'updateContactSettingConfig'])->name('update-action');
            });
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Member Route Group Section
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => 'check-role:member'], function () {
        Route::get('/dashboard', [DashboardMemberController::class, 'dashboardAdminView'])->name('dashboard');
        Route::get('/user-profile', [UserProfileController::class, 'userProfileView'])->name('user-profile');

        Route::group(['prefix' => 'product-link', 'as' => 'product-link.'], function () {
            Route::get('/', [ManageProductLinkController::class, 'indexMemberProductLink'])->name('index-view');
            Route::get('/create-product-link', [ManageProductLinkController::class, 'generateProductLinkView'])->name('create-view');
            Route::get('/{product_link_id}/edit', [ManageProductLinkController::class, 'editProductLinkView'])->name('edit-product-link-view');
            Route::get('/{product_link_id}/{product_id}/show-related-product', [ManageProductLinkController::class, 'showRelatedProductView'])->name('show-related-product');
        });

        Route::group(['prefix' => 'member-finance', 'as' => 'member-finance.'], function () {
            Route::group(['prefix' => 'my-money', 'as' => 'my-money.'], function () {
                Route::get('/', [ManageMemberMoneyController::class, 'memberMoneyView'])->name('index-view');
                Route::get('/{my_money_id}/member-mutation', [ManageMemberMoneyController::class, 'memberMoneyMutation'])->name('mutation-view');
            });
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Customer Route Group Section
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'customer', 'as' => 'customer.', 'middleware' => 'check-role:customer'], function () {
        Route::get('/dashboard', [DashboardCustomerController::class, 'customerDashboardView'])->name('dashboard');
        Route::get('/order-transaction-history', [CustomerOrderTransactionHistoryController::class, 'customerOrderTransactionHistoryView'])->name('order-transaction-history-view');
        Route::get('/contact-us', [CustomerAdminContactController::class, 'customerContactAdminView'])->name('contact-us-view');
    });
});
