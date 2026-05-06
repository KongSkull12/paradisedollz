<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $publishedCoursesCount = Course::query()->where('is_published', true)->count();

        $previewCourses = Course::query()
            ->where('is_published', true)
            ->withCount('lessons')
            ->with(['lessons' => fn ($q) => $q->orderBy('sort_order')->limit(3)])
            ->orderBy('sort_order')
            ->orderBy('title')
            ->limit(4)
            ->get();

        return view('home', compact('previewCourses', 'publishedCoursesCount'));
    }
}
