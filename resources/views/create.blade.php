@extends('layout.master')

@section('title','create')

@section('content')
   <div class="page-header">
    <div class="page-header-row">
        <div class=" page-header-column-1">
            <h3 class="header-title"> Student <i class="fa-solid fa-chevron-right gt-icon"></i> create</h3>
        </div>
    </div>
   </div>

   <div class="record">
    <form action="">
        <div class="button-group">
            <input type="submit" name="save" value="save" class="action-btn save-btn">
            <input type="button" name="cancle" value="cancle" class="action-btn cancle-btn">
        </div>

        <div class="record-grid">
            <div class="left">
                <div class="middle">
                    <div class="panel panel-default headered first" data-name="panel-0" data-style="default" data-tab="0">
                        <div class="panel-heading"><h4 class="panel-title">Overview</h4></div>
                        <div class="panel-body panel-body-form">
                            <div class="row">
                                <div class="cell col-sm-6 form-group">
                                    <label class="control-label">
                                        <span class="label-text">Name</span>
                                        <span class="required-sign"> *</span>
                                    </label>

                                    <div class="field">
                                        <div class="col-sm-4 col-xs-4">
                                            <input type="text" class="form-control" value="">
                                        </div>   
                                    </div>
                                </div>
    
                                <div class="cell col-sm-6 form-group">
                                    <label class="control-label">
                                        <span class="label-text">Age</span>
                                        <span class="required-sign"> *</span>
                                    </label>
                                    <div class="field">
                                        <div class="col-sm-4 col-xs-4">
                                            <input type="text" class="form-control" data-name="firstName" value="">
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell col-sm-6 form-group">
                                    <label class="control-label">
                                        <span class="label-text">Course</span>
                                        <span class="required-sign"> *</span>
                                    </label>

                                    <div class="field">
                                        <div class="col-sm-4 col-xs-4">
                                            <input type="text" class="form-control" value="">
                                        </div>   
                                    </div>
                                </div>
    
                                <div class="cell col-sm-6 form-group">
                                    <label class="control-label">
                                        <span class="label-text">Department</span>
                                        <span class="required-sign"> *</span>
                                    </label>
                                    <div class="field">
                                        <div class="col-sm-4 col-xs-4">
                                            <input type="text" class="form-control" data-name="firstName" value="">
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right"></div>
        </div>
    </form>
   </div>
@endsection