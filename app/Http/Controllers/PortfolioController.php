<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photos = [];
        if ($request->file("app_icon")) {
            $file = $request->file("app_icon");
            $icon_name = str_replace(" ", "_", $request->app_name) . "_" . Str::random(40) . "." . $file->getClientOriginalExtension();
            $file->move(storage_path("app/public/img/portfolio/"), $icon_name);
        }
        if ($request->file("app_photos")) {
            foreach ($request->file("app_photos") as $photo) {
                $photo_name = str_replace(" ", "_", $request->app_name) . "_" . Str::random(40) . "." . $photo->getClientOriginalExtension();
                $photo->move(storage_path("app/public/img/portfolio/photos/"), $photo_name);
                array_push($photos, $photo_name);
            }
        }
        Portfolio::create([
            "app_name" => $request->app_name,
            "app_icon" => $icon_name,
            "app_url" => $request->app_url,
            "app_url_fork" => $request->app_url_fork,
            "app_photos" => json_encode($photos),
            "short_desc" => strtolower($request->short_desc),
            "desc" => $request->desc,
            "tags" => json_encode($request->tags),
            "feature" => json_encode($request->feature),
            "slug" => Str::slug($request->app_name),
            "visible_in_landing" => ($request->visible_in_landing) ? true : false,
            "link_to_app" => ($request->link_to_app) ? true : false,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data = Portfolio::where("slug", $slug)->first();
        return view("pages.portfolio.show", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
