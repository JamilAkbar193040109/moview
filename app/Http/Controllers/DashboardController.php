<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMovie = Movie::count();
        $totalReview = Review::count();
        $totalReviewByUser = Review::where('user_id', auth()->user()->id)->count();
        return view('dashboard.dashboard', compact('totalMovie', 'totalReview', 'totalReviewByUser'));
    }
}
