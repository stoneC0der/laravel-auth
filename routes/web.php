<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
// Route::group(['middleware' => ['web', 'checkblocked']], function () {
//     Route::get('/', 'WelcomeController@welcome')->name('welcome');
// });

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    Route::get('/', 'WelcomeController@welcome')->name('welcome');

    /*
    |
    |
    | ABOUT
    |
    |
    */
    Route::get('/about/about-us', 'AboutController@aboutUs')->name('about-us');
    Route::get('/about/manifesto', 'AboutController@manifesto')->name('manifesto');
    Route::get('/about/our-team', 'AboutController@team')->name('team');
    Route::get('/about/our-team/{category}', 'AboutController@teamCategory')->name('team_category');
    Route::get('/about/partners', 'AboutController@partners')->name('partners');
    Route::get('/about/corporate-partners', 'AboutController@corporatePartners')->name('corporate-partners');
    Route::get('/about/reports', 'AboutController@reports')->name('reports');
    Route::get('/about/annual-report', 'AboutController@annualReport')->name('annual-report');

    /*
    |
    |
    | INVESTMENTS
    |
    |
    */
    Route::get('/investments/our-approach', 'InvestmentController@ourApproach')->name('our-approach');
    Route::get('/investments/companies', 'InvestmentController@companies')->name('companies');
    Route::get('/investments/regions', 'InvestmentController@regions')->name('regions');
    Route::get('/investments/sectors', 'InvestmentController@sectors')->name('sectors');
    Route::get('/investments/investments-principles', 'InvestmentController@investmentsPrinciples')->name('investPrinciples');

    /*
    |
    |
    | MEMBERSHIP
    |
    |
    */
    Route::get('/membership/about', 'MembershipController@about')->name('about-membership');
    Route::get('/membership/fellows', 'MembershipController@Fellows')->name('fellows');
    Route::get('/membership/course-overview', 'MembershipController@course')->name('course-overview');
    Route::get('/membership/faqs', 'MembershipController@faqs')->name('faqs');
    Route::get('/membership/regions', 'MembershipController@regions')->name('membership-regions');

    /*
    |
    |
    | AREAS OF INTEREST
    |
    |
    */
    Route::get('/areas-of-interest/education-and-entrepreneurship', 'AreasOfInterestController@educationAndEntrepreneurship')->name('educEntrepreneurship');
    Route::get('/areas-of-interest/human-rights', 'AreasOfInterestController@humanRights')->name('humanRights');
    Route::get('/areas-of-interest/consumer-rights', 'AreasOfInterestController@consumerRights')->name('consumerRights');
    Route::get('/areas-of-interest/good-governance-leadership', 'AreasOfInterestController@goodGovernanceAndLeadership')->name('goodGovernanceAndLeadership');
    Route::get('/areas-of-interest/fight-against-corruption', 'AreasOfInterestController@fightAgainstCorruption')->name('fightAgainstCorruption');
    Route::get('/areas-of-interest/environmental-protection', 'AreasOfInterestController@environmentalProtection')->name('environmentalProtection');
    Route::get('/areas-of-interest/corporate-social-responsibility', 'AreasOfInterestController@corporateAndSocialResponsibility')->name('corporateAndSocialResponsibility');

    /*
    |
    |
    | BLOG
    |
    |
    */
    Route::get('/blog/posts', 'BlogController@index')->name('blog.posts');
    

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('active-users', 'AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);
