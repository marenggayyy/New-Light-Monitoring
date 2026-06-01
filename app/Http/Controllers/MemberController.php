<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use App\Models\Position;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::latest()->get();

        return view('members.index', compact('members'));
    }

    public function create()
    {
        $positions = Position::orderBy('name')->get();

        return view('members.create', compact('positions'));
    }

    public function store(StoreMemberRequest $request)
    {
        Member::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,

            'position_id' => $request->position_id,

            'status' => 'visitor',
            'spiritual_status' => 'visitor',
        ]);

        return redirect()->route('members.index')->with('success', 'Member added successfully.');
    }

    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }
}
