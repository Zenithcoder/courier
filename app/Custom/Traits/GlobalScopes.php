<?php

namespace App\Custom\Traits;

use Illuminate\Support\Facades\Request;

trait GlobalScopes {

    public function scopeGlobalSearch($query, array $columns, $query_string = null) {
        $query_string = is_null($query_string) ? Request::get('q') : $query_string;

        $where = "where";
        foreach($columns as $column){
            $query->{$where}($column,'like',"%".$query_string."%");
            $where = "orWhere";
        }
    }
}