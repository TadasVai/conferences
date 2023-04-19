<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Couchbase\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ConferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        //$conference = new Conference();

        //return view('conferences.index', ['conference' => $conference->all()]);

        //return \view('conferences.index');
        $conferences = Conference::all(); // assuming "Conference" is the model for conferences

        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return \view('conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreConferenceRequest $request, Conference $conference): RedirectResponse
    {
        //$request->validate([
        //    'title'=>'required|min:3|max:50',
        //    'content'=>'required|min:10',
        //    'address'=>'required|min:5'
        //]);

        //$conference = new Conference();
        $validated = $request->validated();
        $conferenceItem = $conference->create($validated);
        //$conference->title = $request->input('title');
        //$conference->content = $request->input('content');
        //$conference->address = $request->input('address');
        //$conference->save();

        $request->session()->flash('status', 'Conference created!');

        return redirect()-> route('conferences.show', ['conference'=>$conferenceItem->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * return View
     */
    public function show(int $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conferences.show', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {

        return view('conferences.edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreConferenceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreConferenceRequest $request, int $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $validated = $request->validated();
        $conference->fill($validated);
        $conference->save();

        $request->session()->flash('status', 'Conference was updated!');

        return redirect()->route('conferences.show', ['conference'=>$conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted!');

        return redirect()->route('conferences.index');
    }
}
