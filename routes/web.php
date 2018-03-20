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
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('about')->group(function () {

    Route::get('', function () {
        return view('about');
    })->name('about');
    Route::prefix('global-agenda')->group(function () {
        Route::get('african-union', function () {
            return view('ga-african-union');
        })->name('ga-african-union');
        Route::get('asean-singapore', function () {
            return view('ga-asean-singapore');
        })->name('ga-asean-singapore');
        Route::get('belt-road', function () {
            return view('ga-belt-road');
        })->name('ga-belt-road');
        Route::get('caricom', function () {
            return view('ga-caricom');
        })->name('ga-caricom');
        Route::get('digital-bangladesh', function () {
            return view('ga-digital-bangladesh');
        })->name('ga-digital-bangladesh');
        Route::get('make-in-india', function () {
            return view('ga-make-in-india');
        })->name('ga-make-in-india');
        Route::get('unsdg', function () {
            return view('ga-unsdg');
        })->name('ga-unsdg');

    });

});


Route::prefix('posts')->group(function () {
    Route::get('1', function () {
        return view('post-1');
    })->name('post-1');

    Route::get('2', function () {
        return view('post-2');
    })->name('post-2');

    Route::get('3', function () {
        return view('post-3');
    })->name('post-3');
});

Route::get('/faqs', function () {
    return view('faqs');
})->name('faq');

Route::get('summit/2018/theme', function () {
    return view('theme');
})->name('theme');

Route::get('/legal', function () {
    return view('legal');
})->name('legal');


Route::prefix('summit')->group(function () {
    Route::prefix('2018')->group(function () {
        Route::get('overview', function (\Illuminate\Http\Request $request) {
            $ret = new \App\Http\Controllers\NewsletterSubscriptionCTLR();

            return $ret->returnView($request);
        })->name('overview18');

        Route::post('overview', function (\Illuminate\Http\Request $request) {
            $ret = new \App\Http\Controllers\NewsletterSubscriptionCTLR();
            return $ret->submitForm($request);
        });

        Route::get('schedule', function () {
            return view('schedule');
        })->name('schedule');

        Route::get('metro-hackathon', function () {
            return view('metro-hackathon');
        })->name('metro-hackathon');

        Route::get('workshop', function () {
            return view('workshop');
        })->name('workshop');
        Route::prefix('venues')->group(function () {
            Route::get('hku', function () {
                return view('venue-hku');
            })->name('venue-hku');

            Route::get('sysu', function () {
                return view('venue-sysu');
            })->name('venue-sysu');

            Route::get('cyberport', function () {
                return view('venue-cyberport');
            })->name('venue-cyberport');
        });

        Route::prefix('panel')->group(function () {
            Route::get('technology-future', function () {
                return view('ct-techfuture');
            })->name('panel-techfuture');

            Route::get('entrepreneurship', function () {
                return view('ct-entrepreneurship');
            })->name('panel-entrepreneurship');

            Route::get('entertainment-living', function () {
                return view('ct-entertainment-living');
            })->name('panel-entertainment-living');

            Route::get('development-resilience', function () {
                return view('ct-development-resilience');
            })->name('panel-development-resilience');

            Route::get('earth-urban-energy', function () {
                return view('ct-earth-urban-energy');
            })->name('panel-earth-urban-energy');

            Route::get('space-extraterrestrial', function () {
                return view('ct-space-extraterrestrial');
            })->name('panel-space-extraterrestrial');
        });

    });
    Route::prefix('2017')->group(function () {
        Route::get('summit/2017/highlights', function () {
            return view('highlight17');
        })->name('highlights17');

    });

    Route::prefix('2016')->group(function () {

        Route::get('summit/2016/highlights', function () {
            return view('highlight16');
        })->name('highlights16');

    });

});



Route::get('/humans-of-fcs', function () {
    return view('humen_fcs');
})->name('humen_fcs');


Route::get('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();

    return $ret->returnView($request);
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ContactFormCTLR();
    return $ret->submitForm($request);

});

Route::get('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    return $ret->returnView($request);
})->name('app_delegate');

Route::post('/applications/delegates', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\DelegatesApplicationCTLR();
    return $ret->submitForm($request);
});

Route::get('/applications/chapter-recruitment', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterReqruitmentCTLR();
    return $ret->returnView($request);
});

Route::get('/applications/chapter', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterApplicationCTLR();
    return $ret->returnView($request);
})->name('app_chapter_new');

Route::post('/applications/chapter', function (\Illuminate\Http\Request $request) {
    $ret = new \App\Http\Controllers\ChapterApplicationCTLR();
    return $ret->submitForm($request);

});

