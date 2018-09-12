@extends('layouts.app')

@section("title", "SMTP List")

@section('styles')
    <style>
        .page-title > .title_left h3, .page-title > .title_left a {
            display: inline-block;
        }
        .page-title > .title_left {
            width: 100%;
        }
        .page-title > .title_left a {
            float: right;
        }
    </style>
@endsection

@section('content')


    <!-- page content -->
    <div class="right_col" role="main">

        <div class="row clearfix">

            <div class="clearfix">

                <div class="col-md-9">

                    <div class="page-title">
                        <div class="title_left" style="margin-bottom: 15px;">
                            <h3>Setup Email SMTP Settings</h3>
                            <a class="btn btn-primary btn-lg" href="{{ route('smtp.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp; Add New</a>
                        </div>
                    </div>

                    <div class="x_panel">
                        <div class="x_content">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Domain</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ( !empty($data['userSmtpSettings']) )
                                        @foreach ( $data['userSmtpSettings'] as $smtpSetting )

                                        @endforeach
                                    @else
                                        <tr><td colspan="5">No SMTP settings</td></tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    Hello
                </div>

            </div>

        </div>

    </div>

@endsection
<!-- js placed at the end of the document so the pages load faster -->