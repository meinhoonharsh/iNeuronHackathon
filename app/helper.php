<?php

use App\Models\Pageview;

function viewcount($id)
{
    $count = Pageview::where('page_id', $id)->where('type', 'b')->count();
    return $count;

}
