<form id="frm_new_integration" action="{{ route('integration.store') }}" method="post">

        <div class="form-group">
            <div class="row clearfix">
                <div class="col-md-12">
                    <label for="integration_title">Title</label>
                    <input type="text" name="integration_title" id="integration_title" class="form-control"
                           placeholder="give integration a name" value="{{ $data['userIntegration']->name }}" required/>
                </div>
                <input type="hidden" name="choose_service" value="{{ $data['userIntegration']->service_type }}" />
                <input type="hidden" name="integration" value="{{ $data['userIntegration']->service_type }}" />
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        </div>

        <div class="form-group dynamic-service-details">
            <div class="integration-fields">
                <div class="form-group">
                    {{ Form::label('username', 'Username:') }}
                    {{ Form::text('username', $data['info']->username, array('class' => 'form-control', 'name' => 'details[username]', 'required' => '', 'placeholder' => "Provide username", 'autofocus' => '')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::text('password', $data['info']->password, array('class' => 'form-control', 'name' => 'details[password]', 'required' => '', 'placeholder' => "Provide password")) }}
                </div>
                <div class="form-group">
                    {{ Form::label('apikey', 'API Key:') }}
                    {{ Form::text('apikey', $data['info']->apikey, array('class' => 'form-control', 'name' => 'details[apikey]', 'required' => '', 'placeholder' => "Provide API Key")) }}
                </div>
            </div>
        </div>
    </div>


    <div class="modal-footer">
        <button type="submit" class="btn special-button-success"><i class="fa fa-floppy-o"
                                                                    aria-hidden="true"></i>
            Save Integration
        </button>
    </div>
</form>