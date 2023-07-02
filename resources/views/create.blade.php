@extends('layout.master')

@section('title','create')

@section('content')
   <div class="page-header">
    <div class="page-header-row">
        <div class=" page-header-column-1">
            <h3 class="header-title"> Leads <i class="fa-solid fa-chevron-right gt-icon"></i> create</h3>
        </div>
    </div>
   </div>

   <div class="record">
    <form action="">
        <div class="button-group">
            <input type="submit" name="save" value="save" class="action-btn save-btn">
            <input type="button" name="cancle" value="cancle" class="action-btn cancle-btn">
        </div>

        <div class="form-sections">
                
        </div>
    </form>
   </div>
@endsection