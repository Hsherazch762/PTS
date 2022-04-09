<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function() {
    Route::apiResources([
        'boards' => BoardController::class,
        'levels' => LevelController::class,
        'courses' => CourseController::class,
        'chapters' => ChapterController::class,
    ]);
});
