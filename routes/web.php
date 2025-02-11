<?php

use App\Http\Livewire\CartController;
use App\Http\Livewire\CheckoutController;
use App\Http\Livewire\HomeController;
use App\Http\Livewire\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',\App\Http\Livewire\HomeComponent::class)->name('home.index');

Route::get('/shop',\App\Http\Livewire\ShopComponent::class)->name('shop');

Route::get('/product/{slug}',\App\Http\Livewire\DetailsComponent::class)->name('product.details');

Route::get('/cart',\App\Http\Livewire\CartComponent::class)->name('shop.cart');

Route::get('/wishlist',\App\Http\Livewire\WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',\App\Http\Livewire\CheckoutComponent::class)->name('shop.checkout');

Route::get('/product-category/{slug}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');

Route::get('/search',\App\Http\Livewire\SearchComponent::class)->name('product.search');

Route::get('/blog',\App\Http\Livewire\BlogComponent::class)->name('blog');

Route::get('/blog/{slug}',\App\Http\Livewire\DetailsBlogComponent::class)->name('blog.details');

Route::get('/clinicsandhospitals',\App\Http\Livewire\ClinicsAndHospitalsComponent::class)->name('clinicsandhospitals');

Route::get('/kindergartensandschools',\App\Http\Livewire\KindergartensAndSchoolsComponent::class)->name('kindergartensandschools');

Route::get('/vegetableexchange',\App\Http\Livewire\VegetableExchangeComponent::class)->name('vegetableexchange');

Route::get('/cafesandrestaurants',\App\Http\Livewire\CafesAndRestaurantsComponent::class)->name('cafesandrestaurants');

Route::get('/mallsandstores',\App\Http\Livewire\MallsAndStoresComponent::class)->name('mallsandstores');

Route::get('/maintenanceandservices',\App\Http\Livewire\MaintenanceAndServicesComponent::class)->name('maintenanceandservices');

Route::get('/madeinegypt',\App\Http\Livewire\MadeInEgyptComponent::class)->name('madeinegypt');

Route::get('/cafe',\App\Http\Livewire\CafeComponent::class)->name('cafe');
Route::get('/mashwyat',\App\Http\Livewire\MashwyatComponent::class)->name('mashwyat');
Route::get('/fast',\App\Http\Livewire\FastComponent::class)->name('fast');
Route::get('/fish',\App\Http\Livewire\FishComponent::class)->name('fish');
Route::get('/piza',\App\Http\Livewire\PizaComponent::class)->name('piza');
Route::get('/local',\App\Http\Livewire\LocalComponent::class)->name('local');

Route::get('/koshary',\App\Http\Livewire\KosharyComponent::class)->name('koshary');
Route::get('/masmat',\App\Http\Livewire\MasmatComponent::class)->name('masmat');
Route::get('/fool',\App\Http\Livewire\FoolComponent::class)->name('fool');
Route::get('/mokh',\App\Http\Livewire\MokhComponent::class)->name('mokh');
Route::get('/sgok',\App\Http\Livewire\SgokComponent::class)->name('sgok');
Route::get('/desert',\App\Http\Livewire\DesertComponent::class)->name('desert');
Route::get('/cars',\App\Http\Livewire\CarsComponent::class)->name('cars');
Route::get('/stores',\App\Http\Livewire\StoreComponent::class)->name('stores');
Route::get('/malls',\App\Http\Livewire\MallComponent::class)->name('malls');
Route::get('/men',\App\Http\Livewire\MenComponent::class)->name('men');
Route::get('/women',\App\Http\Livewire\WomenComponent::class)->name('women');
Route::get('/child',\App\Http\Livewire\ChildComponent::class)->name('child');
Route::get('/offer',\App\Http\Livewire\OfferComponent::class)->name('offer');
Route::get('/wear',\App\Http\Livewire\WearComponent::class)->name('wear');
Route::get('/skin',\App\Http\Livewire\SkinComponent::class)->name('skin');
Route::get('/sale',\App\Http\Livewire\SaleComponent::class)->name('sale');
Route::get('/drive',\App\Http\Livewire\DriveComponent::class)->name('drive');
Route::get('/rent',\App\Http\Livewire\RentComponent::class)->name('rent');
Route::get('/fix',\App\Http\Livewire\FixComponent::class)->name('fix');
Route::get('/hospital',\App\Http\Livewire\HospitalComponent::class)->name('hospital');
Route::get('/clinic',\App\Http\Livewire\ClinicComponent::class)->name('clinic');
Route::get('/lab',\App\Http\Livewire\LabComponent::class)->name('lab');
Route::get('/pharma',\App\Http\Livewire\PharmaComponent::class)->name('pharma');
Route::get('/online',\App\Http\Livewire\OnlineComponent::class)->name('online');

Route::get('/teeth',\App\Http\Livewire\TeethComponent::class)->name('teeth');
Route::get('/beauty',\App\Http\Livewire\BeautyComponent::class)->name('beauty');
Route::get('/nesa',\App\Http\Livewire\NesaComponent::class)->name('nesa');
Route::get('/graha',\App\Http\Livewire\GrahaComponent::class)->name('graha');
Route::get('/batna',\App\Http\Livewire\BatnaComponent::class)->name('batna');
Route::get('/children',\App\Http\Livewire\ChildernComponent::class)->name('children');
Route::get('/anf',\App\Http\Livewire\AnfComponent::class)->name('anf');
Route::get('/geld',\App\Http\Livewire\GeldComponent::class)->name('geld');
Route::get('/ramad',\App\Http\Livewire\RamadComponent::class)->name('ramad');
Route::get('/mokhw',\App\Http\Livewire\MokhwComponent::class)->name('mokhw');
Route::get('/heart',\App\Http\Livewire\HeartComponent::class)->name('heart');

Route::get('/school',\App\Http\Livewire\SchoolComponent::class)->name('school');
Route::get('/kinder',\App\Http\Livewire\KinderComponent::class)->name('kinder');
Route::get('/center',\App\Http\Livewire\CenterComponent::class)->name('center');
Route::get('/anystore',\App\Http\Livewire\AnyStoreComponent::class)->name('anystore');
Route::get('/bone',\App\Http\Livewire\BoneComponent::class)->name('bone');

Route::get('/self',\App\Http\Livewire\SelfComponent::class)->name('self');
Route::get('/masalek',\App\Http\Livewire\MasalekComponent::class)->name('masalek');
Route::get('/physical',\App\Http\Livewire\PhysicalComponent::class)->name('physical');
Route::get('/chest',\App\Http\Livewire\ChestComponent::class)->name('chest');


Route::get('languageConverter/{locale}',function($locale){
    if(in_array($locale,['ar','en'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();

})->name('languageConverter');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user/dashbord',\App\Http\Livewire\user\UserDashbordComponent::class)->name('user.dashbord');
// });

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin/dashbord',\App\Http\Livewire\Admin\AdminDashbordComponent::class)->name('admin.dashbord');
    Route::get('/admin/categories',\App\Http\Livewire\Admin\AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',\App\Http\Livewire\Admin\AdminAddCategoriesComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',\App\Http\Livewire\Admin\AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',\App\Http\Livewire\Admin\AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',\App\Http\Livewire\Admin\AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',\App\Http\Livewire\Admin\AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider',\App\Http\Livewire\Admin\AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add',\App\Http\Livewire\Admin\AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/edit{slide_id}',\App\Http\Livewire\Admin\AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');
    Route::get('/admin/blogs',\App\Http\Livewire\Admin\AdminBlogComponent::class)->name('admin.blogs');
    Route::get('/admin/blog/add',\App\Http\Livewire\Admin\AdminAddBlogComponent::class)->name('admin.blog.add');
    Route::get('/admin/blog/edit/{blog_id}',\App\Http\Livewire\Admin\AdminEditBlogComponent::class)->name('admin.blog.edit');

});

require __DIR__.'/auth.php';
