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



Route::get('/blogs', \App\Actions\Blog\Client\BlogClientViewAction::class)->name('blogs');
Route::get('/certificate', \App\Actions\Certificates\Client\CertificateClientIndex::class)->name('certificate');



Route::prefix('auth')->group(function () {

    Route::get('/view-form/{note}', [\App\Actions\WhoUs\UpdateNotesAction::class, 'viewForm'])->name('view.form');





    Route::get('/colorphoto/index', \App\Actions\Colorphoto\Admin\ColorphotoAdminindex::class)->name('colorphoto-index');
    Route::get('/colorphoto/create/view', \App\Actions\Colorphoto\Admin\ColorphotoCreateViewIndex::class)->name('colorphoto-create-view');
    Route::get('/colorphoto/edit/view{colorphoto}', \App\Actions\Colorphoto\Admin\ColorphotoEditView::class)->name('colorphoto-edit-view');


    Route::post('/colorphoto/create', \App\Actions\Colorphoto\Admin\CreateAction::class)->name('colorphoto-create');
    Route::post('/colorphoto/delete/{colorphoto}', \App\Actions\Colorphoto\Admin\DeleteColorphotoAction::class)->name('colorphoto-delete');
    Route::post('/colorphoto/update/{colorphoto}', \App\Actions\Colorphoto\Admin\EditColorphotoAction::class)->name('colorphoto-update');







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
    Route::get('/Admin-create-who-us', \App\Actions\WhoUs\AdminWhoUsCreateAction::class)->name('admin.create.who.us');
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
