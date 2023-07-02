@extends('layout.master')
@section('title','app - home')
@section('content')
    <div class="page-header">
        <div class="page-header-row">
            <div class="page-header-column-1"">
                <h3 class="header-title">Lead</h3>
            </div>
            <div class="page-header-column-2">
                <a href="{{ route('create') }}">
                    <button class="create-btn">
                        <i class="fa-solid fa-plus"></i>
                        Create Lead
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection