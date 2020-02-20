<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140',
        ]);

        Auth::user()->statuses()->create([
            'content' => $request->content,
        ]);

        session()->flash('success', '创建微博成功！');
        return back();
    }

    public function destroy(Status $status)
    {
        $this->authorize('delete', $status);

        $status->delete();

        session()->flash('success', '微博已被成功删除！');
        return back();
    }
}
