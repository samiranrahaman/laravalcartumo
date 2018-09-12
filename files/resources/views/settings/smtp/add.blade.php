@extends('layouts.app')

@section("title", "SMTP List")

@section('content')


        <!-- page content -->
<div class="right_col" role="main">

    <div class="page-title clearfix">
        <div class="title_left">
            <h3><i class="fa fa-paper-plane"></i> Setup Email SMTP Settings</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <hr />

    <div class="row clearfix">

        <div class="x_panel">
            <div class="x_content">
                {!! Form::open(array('route' => 'profile.store', 'data-parsley-required' => '', 'class' => 'form-horizontal form-label-left input_mask')) !!}

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('title', 'Title:') }}
                        {{ Form::text('title', null, array('class' => 'form-control has-feedback-left', 'required' => '', 'maxlength' => 255, 'autofocus' => '', 'placeholder' => 'Title')) }}
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('from_name', 'From Name:') }}
                        {{ Form::text('from_name', null, array('class' => 'form-control has-feedback-left', 'required' => '', 'maxlength' => 255, 'autofocus' => '', 'placeholder' => 'First Name')) }}
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('from_mail', 'From Email:') }}
                        {{ Form::text('from_mail', null, array('class' => 'form-control has-feedback-right', 'required' => '', 'maxlength' => 255, 'placeholder' => 'Last Name')) }}
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('smtp_server', 'Smtp Server:') }}
                        {{ Form::text('smtp_server', null, array('class' => 'form-control has-feedback-left', 'required' => '', 'maxlength' => 255, 'autofocus' => '', 'placeholder' => 'First Name')) }}
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('smtp_port', 'Smtp Port:') }}
                        {{ Form::text('smtp_port', null, array('class' => 'form-control has-feedback-right', 'required' => '', 'maxlength' => 255, 'placeholder' => 'Last Name')) }}
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('smtp_user', 'Smtp User:') }}
                        {{ Form::text('smtp_user', null, array('class' => 'form-control has-feedback-left', 'required' => '', 'maxlength' => 255, 'autofocus' => '', 'placeholder' => 'First Name')) }}
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('smtp_password', 'Smtp Password:') }}
                        {{ Form::text('smtp_password', null, array('class' => 'form-control has-feedback-right', 'required' => '', 'maxlength' => 255, 'placeholder' => 'Last Name')) }}
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        {{ Form::label('smtp_domain', 'Smtp Domain:') }}
                        {{ Form::text('smtp_domain', null, array('class' => 'form-control has-feedback-left', 'required' => '', 'maxlength' => 255, 'autofocus' => '', 'placeholder' => 'Title')) }}
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                </div>

                <hr/>

                <div class="row clearfix">
                    <div class="col-xs-12 form-group">
                        {{ Form::label('smtp_footer', 'Smtp Footer:') }}
                        {{ Form::textarea('smtp_footer', null, array('class' => 'form-control', 'required' => '', 'maxlength' => 255, 'placeholder' => 'Address')) }}
                    </div>
                </div>

                <hr/>

                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        {{ Form::select('status', ['enabled'=>'Enabled', 'disabled'=>'Disabled'], NULL, array('class' => 'form-control', 'required' => '', 'maxlength' => 255, 'placeholder' => 'SMTP Status')) }}
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-right">
                        <button type="button" class="btn btn-danger">Cancel</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>


                {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>

@endsection
        <!-- js placed at the end of the document so the pages load faster -->