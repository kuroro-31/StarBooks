<?php

namespace App\Http\Controllers\Books\Chapter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $update = [
            'name' => $request->name,
            'body' => $request->body,
            // 'book_id' => $request->book_id
        ];
        Chapter::where('id', $id)->update($update);
        // return response()->json([
        //     'id' => $chapter->id,
        // ]);
    }
}
