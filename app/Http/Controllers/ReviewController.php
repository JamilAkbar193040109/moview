<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            $reviews = Review::with(['user', 'movie'])->latest()->paginate(6);
        } else {
            $reviews = Review::with(['user', 'movie'])->where('user_id', auth()->id())->latest()->paginate(6);
        }
        return view('dashboard.review.index', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('dashboard.review.create', compact('movies'));
    }

    public function store(StoreReviewRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        Review::create($data);
        return to_route('dashboard.reviews.index')->with('success', 'Review added successfully');
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        Gate::authorize('edit-review', $review);
        $movies = Movie::get(['judul', 'id']);
        return view('dashboard.review.edit', compact('review', 'movies'));
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        Gate::authorize('edit-review', $review);
        $data = $request->validated();
        $review->update($data);
        return to_route('dashboard.reviews.index')->with('success', 'Review updated successfully');
    }

    public function destroy(Review $review)
    {
        Gate::authorize('edit-review', $review);
        $review->delete();
        return to_route('dashboard.reviews.index')->with('success', 'Review deleted successfully');
    }
}
