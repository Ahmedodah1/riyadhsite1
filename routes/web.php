<?php


use App\Http\Controllers\SwitchLanguage;
use App\Models\Book;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('laanding.home', [
        'books' => Book::query()->take(4)->get(),
        'blogs' => \App\Models\Blog::query()->get(),
    ]);
})->name('homepage');





Route::middleware('web')->group(function () {
    Route::get('lang/{locale}', SwitchLanguage::class)->name('lang.switch');
});






// Route::get('/signup', \App\Actions\Auth\RegisterViewAction::class)->name('signup');
Route::get('/signin', \App\Actions\Auth\LogInViewAction::class)->name('signin');
Route::post('/signup-post', \App\Actions\Auth\RegisterPostAction::class)->name('signup.post');
Route::post('/signin-post', \App\Actions\Auth\LoginPostAction::class)->name('signin.post');
Route::get('books-index', \App\Actions\Books\client\BooksClientIndexAction::class)->name('books.index');
Route::get('book-read/{id}', \App\Actions\Books\client\BookReadAction::class)->name('book.read');
Route::get('certificate-read/{id}', [\App\Actions\Books\client\BookReadAction::class, 'readCertificatePdf'])->name('certificate.read');
Route::get('/book/{id}/pdf', [\App\Actions\Books\client\BookReadAction::class, 'pdf'])->name('books.pdf');
Route::get('/certificate/{id}/pdf', [\App\Actions\Books\client\BookReadAction::class, 'pdfCertificate'])->name('certificate.pdf');
Route::get('/whous', \App\Actions\WhoUs\WhoUsAction::class,)->name('whous');
Route::get('/ClientBlackAndWhite', \App\Actions\ClientBlackAndWhite\BlackAndWhite::class)->name('ClientBlackAndWhite');
Route::get('/blog', \App\Actions\Blog::class)->name('blog');


Route::get('/paintings', \App\Actions\Pintings::class)->name('paintings');
Route::get('/colorphoto', \App\Actions\Colorphoto\Client\ColorphotoClientIndex::class)->name('colorphotos');

Route::get('/kitchen', \App\Actions\Kitchens\Client\KitchenClientIndex::class)->name('kitchen');

Route::get('/office', \App\Actions\Office\Client\OfficeClientAction::class)->name('office');

Route::get('/bathroom', \App\Actions\Bathrooms\Client\BathroomClientIndex::class)->name('bathroom');

Route::get('/laundryroom', \App\Actions\Laundryroom\Client\LaundruroomClientAction::class)->name('laundryroom');


Route::get('/coin', \App\Actions\Coins\Client\CoinClientIndex::class)->name('coin');

Route::get('/channel', \App\Actions\Chanels\ChannelClientIndex::class)->name('channel');
Route::get('/channell', \App\Actions\Chanels\ChannelTikIndex::class)->name('channeltik');

Route::get('/coins/{id}/', \App\Actions\Coins\Client\ShowCoinIndex::class)->name('coins.show');


Route::get('/pool', \App\Actions\Pools\Client\PoolClientIndex::class)->name('pool');

Route::get('/sumbook', \App\Actions\SumBooks\Client\SumBookClientAction::class)->name('sumbook');

Route::get('/sumbook/{sumbook}', \App\Actions\SumBooks\Client\ShowSumBookIndex::class)->name('sumbook.show');

Route::get('/diningroom', \App\Actions\Diningroom\Client\DiningroomClientIndex::class)->name('diningroom');



Route::get('/blogs', \App\Actions\Blog\Client\BlogClientViewAction::class)->name('blogs');
Route::get('/certificate', \App\Actions\Certificates\Client\CertificateClientIndex::class)->name('certificate');

Route::get('/decor', [\App\Actions\Decors\Client\DecorClientIndex::class, 'handle'])->name('decor');


Route::prefix('auth')->group(function () {

    Route::get('/view-form/{note}', [\App\Actions\WhoUs\UpdateNotesAction::class, 'viewForm'])->name('view.form');





    Route::get('/colorphoto/index', \App\Actions\Colorphoto\Admin\ColorphotoAdminindex::class)->name('colorphoto-index');
    Route::get('/colorphoto/create/view', \App\Actions\Colorphoto\Admin\ColorphotoCreateViewIndex::class)->name('colorphoto-create-view');
    Route::get('/colorphoto/edit/view{colorphoto}', \App\Actions\Colorphoto\Admin\ColorphotoEditView::class)->name('colorphoto-edit-view');


    Route::post('/colorphoto/create', \App\Actions\Colorphoto\Admin\CreateAction::class)->name('colorphoto-create');
    Route::post('/colorphoto/delete/{colorphoto}', \App\Actions\Colorphoto\Admin\DeleteColorphotoAction::class)->name('colorphoto-delete');
    Route::post('/colorphoto/update/{colorphoto}', \App\Actions\Colorphoto\Admin\EditColorphotoAction::class)->name('colorphoto-update');



    Route::get('/Decor/index', [\App\Actions\Decors\Admin\DecorAdminIndex::class, 'handle'])->name('Decor.index');
    Route::get('/Decor/create/view', [\App\Actions\Decors\Admin\DecorCreateViewIndex::class,'handle'])->name('Decor-create-view');
    Route::get('/Decor/edit/view/{decor}', [\App\Actions\Decors\Admin\DecorEditView::class, 'handle'])->name('Decor-update-view');

    Route::post('/Decor/create', [\App\Actions\Decors\Admin\CreateAction::class, 'handle'])->name('Decor.create');
    Route::post('/Decor/Delete/{Decor}', [\App\Actions\Decors\Admin\DeleteDecorAction::class, 'handle'])->name('Decor.delete');
    Route::post('/decor/update/{decor}', [\App\Actions\Decors\Admin\EditDecorAction::class,'handle'])->name('decor.update');




    Route::get('/coin/index', \App\Actions\Coins\Admin\CoinAdminIndex::class)->name('coin-index');

    Route::post('/coin/create', \App\Actions\Coins\Admin\CreateAction::class)->name('coin-create');

    Route::get('/coin/create/view', \App\Actions\Coins\Admin\CoinCreateViewIndex::class)->name('coin-create-view');

    Route::post('/coin/delete/{coin}', \App\Actions\Coins\Admin\DeleteCoinAction::class)->name('coin-delete');

    Route::post('/coin/update/{coin}', \App\Actions\Coins\Admin\EditCoinAction::class)->name('coin-update');

    Route::get('/coin/edit/view/{coin}', \App\Actions\Coins\Admin\CoinEditView::class)->name('coin-edit-view');


    Route::get('/office/index', \App\Actions\Office\Admin\OfficeAdminIndex::class)->name('office-index');

    Route::post('/office/create', \App\Actions\Office\Admin\CreateAction::class)->name('office-create');

    Route::get('/office/create/view', \App\Actions\Office\Admin\OfficeCreateViewIndex::class)->name('office-create-view');

    Route::post('/office/delete/{office}', \App\Actions\Office\Admin\DeleteOfficeAction::class)->name('office-delete');

    Route::post('/office/update/{office}', \App\Actions\Office\Admin\EditOfficeAction::class)->name('office-update');

    Route::get('/office/edit/view/{office}', \App\Actions\Office\Admin\OfficeEditView::class)->name('office-edit-view');




    Route::get('/bathroom/index', \App\Actions\Bathrooms\Admin\BathroomAdminIndex::class)->name('bathroom-index');

    Route::post('/bathroom/create', \App\Actions\Bathrooms\Admin\CreateAction::class)->name('bathroom-create');

    Route::get('/bathroom/create/view', \App\Actions\Bathrooms\Admin\BathroomCreateViewIndex::class)->name('bathroom-create-view');
    Route::post('/bathroom/delete/{bathroom}', \App\Actions\Bathrooms\Admin\DeleteBathroomAction::class)->name('bathroom-delete');

    Route::post('/bathroom/update/{bathroom}', \App\Actions\Bathrooms\Admin\EditBathroomAction::class)->name('bathroom-update');

    Route::get('/bathroom/edit/view/{bathroom}', \App\Actions\Bathrooms\Admin\BathroomEditView::class)->name('bathroom-edit-view');



    Route::get('/diningroom/index', \App\Actions\Diningroom\Admin\DiningroomAdminIndex::class)->name('diningroom-index');
    Route::post('/diningroom/create', \App\Actions\Diningroom\Admin\CreateAction::class)->name('diningroom-create');
    Route::get('/diningroom/create/view', \App\Actions\Diningroom\Admin\DiningroomCreateViewIndex::class)->name('diningroom-create-view');

    Route::post('/diningroom/delete/{diningroom}',\App\Actions\Diningroom\Admin\DeleteDiningroomAction::class)->name('diningroom-delete');
    Route::post('/diningroom/update/{diningroom}',\App\Actions\Diningroom\Admin\EditDiningroomAction::class)->name('diningroom-update');
    Route::get('/diningroom/edit/view/{diningroom}', \App\Actions\Diningroom\Admin\DiningroomEditView::class)->name('diningroom-edit-view');








    Route::get('/pool/index', \App\Actions\Pools\Admin\PoolAdminIndex::class)->name('pool-index');

    Route::post('/pool/create', \App\Actions\Pools\Admin\CreateAction::class)->name('pool-create');

    Route::get('/pool/create/view', \App\Actions\Pools\Admin\PoolCreateViewIndex::class)->name('pool-create-view');

    Route::post('/pool/delete/{pool}', \App\Actions\Pools\Admin\DeletePoolAction::class)->name('pool-delete');

    Route::post('/pool/update/{pool}', \App\Actions\Pools\Admin\EditPoolAction::class)->name('pool-update');

    Route::get('/pool/edit/view/{pool}', \App\Actions\Pools\Admin\PoolEditView::class)->name('pool-edit-view');




    Route::get('/kitchen/index', \App\Actions\Kitchens\Admin\KitchenAdminIndex::class)->name('kitchen-index');
    Route::get('/kitchen/create/view', \App\Actions\Kitchens\Admin\KitchenCreateViewIndex::class)->name('kitchen-create-view');
    Route::get('/kitchen/edit/view/{kitchen}', \App\Actions\Kitchens\Admin\KitchenEditViewIndex::class)->name('kitchen-edit-view');
    Route::post('/kitchen/create', \App\Actions\Kitchens\Admin\CreateAction::class)->name('kitchen-create');
    Route::post('/kitchen/delete/{kitchen}', \App\Actions\Kitchens\Admin\DeleteKitchenAction::class)->name('kitchen-delete');
    Route::post('/kitchen/update/{kitchen}', \App\Actions\Kitchens\Admin\EditKitchenAction::class)->name('kitchen-edit');




    Route::get('/laundryroom/index', \App\Actions\Laundryroom\Admin\LaundryroomAdminIndex::class)->name('laundryroom-index');
    Route::post('/laundryroom/create', \App\Actions\Laundryroom\Admin\CreateAction::class)->name('laundryroom-create');
    Route::get('/laundryroom/create/view', \App\Actions\Laundryroom\Admin\LaundryroomCreateViewIndex::class)->name('laundryroom-create-view');
    Route::get('/laundryroom/edit/view/{laundryroom}', \App\Actions\Laundryroom\Admin\LaundryEditView::class)->name('laundry-edit-view');
    Route::post('/laundryroom/update/{laundryroom}', \App\Actions\Laundryroom\Admin\EditLaundryroomAction::class)->name('laundryroon-update');
    Route::post('/laundryroom/delete/{laundryroom}', \App\Actions\Laundryroom\Admin\DeleteLaundryroomAction::class)->name('laundryroom-delete');



    Route::get('/livingroom/index', \App\Actions\Livingroom\Admin\LivingroomAdminIndex::class)->name('livingroom-index');
    Route::post('/livingroom/create', \App\Actions\Livingroom\Admin\CreateAction::class)->name('livingroom-create');
    Route::get('/livingroom/create/view', \App\Actions\Livingroom\Admin\LivingroomCreateViewIndex::class)->name('livingroom-create-view');
    Route::get('/livingroom/edit/view/{livingroom}', \App\Actions\Livingroom\Admin\LivingEditView::class)->name('livingroom-edit-view');
    Route::post('/livingroom/update/{livingroom}', \App\Actions\Livingroom\Admin\EditLivingroomroomAction::class)->name('livingroom-update');
    Route::post('/livingroom/delete/{livingroom}', \App\Actions\Livingroom\Admin\DeleteLivingroomAction::class)->name('livingroom-delete');









    Route::get('/sumbook/index', \App\Actions\SumBooks\Admin\SumBookAdminIndex::class)->name('sumbook-index');
    Route::post('/sumbook/create', \App\Actions\SumBooks\Admin\CreateAction::class)->name('sumbook-create');
    Route::get('/sumbook/create/view', \App\Actions\SumBooks\Admin\SumBookCreateViewIndex::class)->name('sumbook-create-view');
    Route::post('/sumbook/update/{sumbook}', \App\Actions\SumBooks\Admin\EditSumBookAction::class)->name('sumbook-edit');
    Route::get('/sumbook/edit/view/{sumbook}', \App\Actions\SumBooks\Admin\SumBookEditView::class)->name('sumbook-edit-view');
    Route::post('/sumbook/delete/{sumbook}', \App\Actions\SumBooks\Admin\DeleteSumBookAction::class)->name('sumbook-delete');








    Route::get('/dashboard', \App\Actions\dashboard\AdminDashboardViewAction::class)->name('dashboard');
    Route::get('/certificate/index', \App\Actions\Certificates\Admin\CertificateAdminIndex::class)->name('certificate-index');
    Route::get('/certificate/create/view', \App\Actions\Certificates\Admin\CertificateCreateViewIndex::class)->name('certificate-create-view');
    Route::get('/certificate/edit/view/{certificate}', \App\Actions\Certificates\Admin\CertificateEditView::class)->name('certificate-update-view');
    Route::post('/certificate/create', \App\Actions\Certificates\Admin\CreateAction::class)->name('certificate-create');
    Route::post('/certificate/delete/{certificate}', \App\Actions\Certificates\Admin\DeleteCertificateAction::class)->name('certificate-delete');
    Route::post('/certificate/update/{certificate}', \App\Actions\Certificates\Admin\EditCertificateAction::class)->name('certificate-update');
    Route::get('/admin/blog/index', \App\Actions\Blog\BlogIndexAction::class)->name('admin.blog.index');
    Route::post('/admin/blog/create', \App\Actions\Blog\BlogCreateAction::class)->name('admin.blog.create');
    Route::post('/admin/blog/delete/{blog}', \App\Actions\Blog\BlogDeleteAction::class)->name('admin.blog.delete');
    Route::post('/admin/blog/update/{blog}', \App\Actions\Blog\BlogUpdateAction::class)->name('admin.blog.update');
    Route::get('/admin/blog/create/view', \App\Actions\Blog\BlogCreateViewAction::class)->name('admin.blog.create.view');
    Route::get('/admin/blog/update/view/{blog}', \App\Actions\Blog\BlogUpdateViewAction::class)->name('admin.blog.update.view');
    Route::post('/logout', \App\Actions\Auth\LogOutAction::class)->name('logout');
    Route::post('/book/delete/{book}', \App\Actions\Books\Admin\BookDeleteAction::class)->name('book.delete');
    Route::post('/book/update/{book}', \App\Actions\Books\Admin\BooUpdateViewAction::class)->name('book.update');
    Route::post('/book/edit/{book}', \App\Actions\Books\Admin\BooUpdateAction::class)->name('book.edit');
    Route::get('/books', \App\Actions\Books\Admin\BooksIndexAction::class)->name('books');
    Route::get('/book-create', \App\Actions\Books\Admin\BookCreateView::class)->name('book-create');
    Route::post('/book-post', \App\Actions\Books\Admin\BookPostAction::class)->name('book-post');
    Route::get('/admin-create-who-us', \App\Actions\WhoUs\AdminWhoUsCreateAction::class)->name('admin.create.who.us');
    Route::get('/whous-index', \App\Actions\WhoUs\AdminWhoUsIndex::class)->name('whous-index');
    Route::post('/create-notes', \App\Actions\WhoUs\CreateNotesAction::class)->name('create.notes');
    Route::post('/update-notes/{note}', \App\Actions\WhoUs\UpdateNotesAction::class)->name('update.notes');

    Route::post('/delete-notes/{note}', \App\Actions\WhoUs\AdminWhoUsDeleteAction::class)->name('delete.notes');
    Route::get('/update-view-notes/{note}', \App\Actions\WhoUs\UpdateNotesAction::class)->name('update.view.notes');
    Route::get('/BlackAndWhite', \App\Actions\BlackAndWhite\BlackAndWhitetIndexAction::class)->name('BlackAndWhite.index');
    Route::get('/BlackAndWhite-View', \App\Actions\BlackAndWhite\BlackAndWhitetIndexAction::class)->name('BlackAndWhite.View');
    Route::get('/BlackAndWhite-create', \App\Actions\BlackAndWhite\CreateViewPhotosAction::class)->name('BlackAndWhite.create');


    Route::post('/CreatePhotoBlackAndWhite', \App\Actions\BlackAndWhite\CreatePhotosAction::class)->name('Create.PhotoBlackAndWhite');
    Route::post('/delete-blackandwhite/{blackAndWhite}', \App\Actions\BlackAndWhite\AdminBlackAndWhiteDeleteAction::class)->name('delete.Photo');
    Route::post('/update-blackandwhite/{blackAndWhite}', \App\Actions\BlackAndWhite\UpdatePhotosAction::class)->name('update.Photo');
    Route::get('/update-view/{blackAndWhite}' , \App\Actions\BlackAndWhite\UpdateViewPhotosAction::class)->name('Update.ViewPhotos');





});
