@extends('layouts.affiliate')

@section("title", "Affiliate Dashboard")

@section('styles')
    <style>
        .nav-sm .container.body .col-md-3.left_col {
            width: 0px;
        }

        .nav-sm .container.body .right_col {
            margin-left: 0px;
        }

        .dashboard-affiliate {
        }

        .dashboard-affiliate-profile {
            border-bottom: 2px solid #F1F1F1;
            margin-bottom: 15px;
        }

        .dashboard-affiliate ul.user-info {
            list-style-type: none;
            padding: 0px;
        }

        .dashboard-affiliate ul.user-info > li {
            display: inline-block;
            vertical-align: middle;
        }

        .dashboard-affiliate ul.user-info > li small {
            font-size: 14px;
        }

        .dashboard-affiliate ul.user-info > li > img {
            margin-right: 15px;
        }

        .dashboard-affiliate .lifetime-earnings {

        }

        .dashboard-affiliate .lifetime-earnings ul.earnings {
            list-style-type: none;
            padding: 0px;
        }

        .dashboard-affiliate .lifetime-earnings ul.earnings > li {
            display: inline-block;
            width: 49%;
        }

        .dashboard-affiliate .lifetime-earnings ul.earnings > li:last-child {
            text-align: right;
            color: #62a445;
        }

        .dashboard-affiliate .lifetime-earnings .table-amount-pending-paid {

        }

        .dashboard-affiliate .lifetime-earnings .table-amount-pending-paid tr {

        }

        .dashboard-affiliate .lifetime-earnings .table-amount-pending-paid tr th {

        }

        .dashboard-affiliate .lifetime-earnings .table-amount-pending-paid tr td {
            font-weight: 700;
        }

        .dashboard-affiliate .earnings-snapshot {
        }

        .dashboard-affiliate .earnings-snapshot > .wrapper {
            padding: 30px 30px 30px;
            border: 2px solid #F1F1F1;
        }

        .dashboard-affiliate .earnings-snapshot > .wrapper .col-md-4 {
            text-align: center;
        }

        .dashboard-affiliate .earnings-snapshot span {
            display: block;
            font-size: 14px;
            opacity: .7;
        }

        .dashboard-affiliate .earnings-snapshot strong {
            font-size: 16px;
        }

        .dashboard-affiliate .earnings-snapshot strong.colored {
            color: #62a445;
            font-size: 18px;
        }

        .dayes-earning-list {

        }

        .dayes-earning-list-container {

        }

        .dayes-earning-list-container ul {
            list-style-type: none;
            padding: 0px;
            margin-bottom: 0px;
        }

        .dayes-earning-list-container .items {
            width: 100%;
            border-top: 1px solid #E8E8E8;
            border-bottom: 1px solid #E8E8E8;
            position: relative;
            background: #F7F7F7;
        }

        .dayes-earning-list-container ul > li {
            display: inline-block;
        }

        .dayes-earning-list-container ul > li:first-child {
            width: 20%;
            background-color: #45b39c;
            color: #FFF;
            line-height: 45px;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;

        }

        .dayes-earning-list-container ul > li:last-child {
            width: 78%;
            text-align: right;
            padding: 0px 15px;
        }

        .dayes-earning-list-container ul > li:last-child > span {
            font-weight: 700;
            font-size: 16px;
            padding: 4px 15px;
            background: #fff;
            margin-top: 7px;
            display: inline-block;
        }

        #profileModal {

        }

        #profileModal .modal-body .tab-content {
            padding: 20px 15px 15px;
        }

        #profileModal .modal-body .tab-content .form-group {
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <!-- /top tiles -->
        <div class="page-title">
            <div class="title_left">
                <h3 class="dashboard-page-title"><i class="fa fa-dollar" aria-hidden="true"></i> Affiliate Dashboard
                </h3>
            </div>
        </div>
        <br/>

        <div class="row clearfix">
            <div class="col-md-7 col-xs-7">
                <div class="row">

                </div>

                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph x_panel clearfix">

                            <div class="col-xs-12 bg-white dashboard-affiliate" style="padding-top: 15px">
                                <div class="row dashboard-affiliate-profile clearfix">
                                    <div class="col-md-9">
                                        <ul class="user-info">
                                            <li><img src="{{ asset('global/img/profile-avatar.png') }}"
                                                     style="width: 42px"></li>
                                            <li>
                                                <small>{{ Auth::user()->email }}</small>
                                                <br>
                                                <strong>#{{ (!empty($affiliateProfile->affiliate_id)) ? $affiliateProfile->affiliate_id : '' }}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <button typeof="button" class="btn" data-toggle="modal"
                                                data-target="#profileModal">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Profile
                                        </button>
                                    </div>
                                </div>

                                <div class="row clearfix lifetime-earnings">
                                    <div class="col-md-12">
                                        <ul class="earnings">
                                            <li><strong>Lifetime Earnings:</strong></li>
                                            <li><strong>$0.00</strong></li>
                                        </ul>
                                        <br>

                                        <table class="table table-amount-pending-paid">
                                            <thead>
                                            <tr>
                                                <th>Pending</th>
                                                <th>Paid</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row earnings-snapshot">
                                    <h4>Earnings Snapshot</h4>
                                    <div class="wrapper clearfix">
                                        <div class="col-md-4">
                                            <span>Today so far</span>
                                            <strong class="colored">$0.00</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <span>Last 7 days</span>
                                            <strong>$0.00</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <span>Last 30 days</span>
                                            <strong>$0.00</strong>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-5 col-xs-5">
                <div class="x_panel dayes-earning-list-container">
                    <h4>Earnings</h4>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                    <div class="items">
                        <ul class="item">
                            <li>FRI / AUG / 31</li>
                            <li><span>$0.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tools-link" style="padding-top: 25px">
            <div class="col-md-6 col-md-offset-3">
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#affiliateLinkModal"> Affiliate Tools - Get my links!</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="profileModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <form id="frm_affiliate_profile" action="{{ route('affiliate.store') }}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Affiliate Profile</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" id="tabContent">
                            <li class="active"><a href="#settings" data-toggle="tab"><i class="fa fa-cogs"></i>&nbsp;Settings</a>
                            </li>
                            <li><a href="#address" data-toggle="tab"><i class="fa fa-home"></i>&nbsp;Address</a></li>
                            <li><a href="#payments" data-toggle="tab"><i class="fa fa-shopping-cart"></i>&nbsp;Payments</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="settings">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input id="first_name" type="text" name="settings[first_name]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->settings->first_name)) ? $affiliateProfile->settings->first_name : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" name="settings[last_name]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->settings->last_name)) ? $affiliateProfile->settings->last_name : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" name="settings[email]" class="form-control" value="{{ (!empty($affiliateProfile->settings->email)) ? $affiliateProfile->settings->email : Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="text" name="settings[phone]" class="form-control" value="{{ (!empty($affiliateProfile->settings->phone)) ? $affiliateProfile->settings->phone : '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="address">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_1">Address 1</label>
                                            <input id="address_1" type="text" name="address[address1]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->address->address1)) ? $affiliateProfile->address->address1 : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address_2">Address 2</label>
                                            <input id="address_2" type="text" name="address[address2]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->address->address2)) ? $affiliateProfile->address->address2 : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input id="country" type="text" name="address[country]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->address->country)) ? $affiliateProfile->address->country : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input id="city" type="text" name="address[city]" class="form-control" value="{{ (!empty($affiliateProfile->address->city)) ? $affiliateProfile->address->city : '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input id="state" type="text" name="address[state]" class="form-control" value="{{ (!empty($affiliateProfile->address->state)) ? $affiliateProfile->address->state : '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="zip">Zip</label>
                                            <input id="zip" type="text" name="address[zip]" class="form-control" value="{{ (!empty($affiliateProfile->address->zip)) ? $affiliateProfile->address->zip : '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="payments">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="paypal_email">Paypal Email</label>
                                            <input id="paypal_email" type="text" name="payments[paypal_email]"
                                                   class="form-control" value="{{ (!empty($affiliateProfile->payments->paypal_email)) ? $affiliateProfile->payments->paypal_email : '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="save_form_details" type="submit" class="btn btn-primary">Save Details</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div id="affiliateLinkModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Affiliate Link</h4>
                </div>
                <div class="modal-body">
                    <h4>Affiliate Link</h4>
                    @if ( !empty($affiliateProfile->affiliate_id) )
                        <p>{{ route('register', array('affiliate_id' => md5($affiliateProfile->affiliate_id))) }}</p>
                    @else
                        <p>No Link</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection


@section("scripts")
    <script>
        $(document).ready(function () {

            $("#frm_affiliate_profile").submit(function() {

                var button = $("#save_form_details");

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize() + '&_token=' + $("#csrf_token").val(),
                    beforeSend: function () {
                        // Disable the submit button to prevent repeated clicks
                        $(button).prop('disabled', true);
                        $(button).html('<i class="fa fa-spinner fa-spin"></i>');
                    },
                    success: function (response) {
                        console.log(response);
                        //$(button).prop('disabled', false);

                        var json = JSON.parse(response);
                        if ( json.status == 'success' ) {
                            location.href = json.url;
                        }
                    },
                    error: function (a, b) {
                        document.write(a.responseText);
                    }
                });
            });

        })
    </script>
@endsection