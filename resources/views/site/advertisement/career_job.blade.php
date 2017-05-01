<div>

    title:
    {{ $object->title }}
    {{ $object->mobile_no }}
    {{ $object->phone_no }}
    {{ $object->advertisment_date }}
    {{ Carbon\Carbon::parse($object->advertisment_date)->formatLocalized('%A, %d %B %Y') }}
    {{ Carbon\Carbon::parse($object->advertisment_date)->formatLocalized('%H:%M') }}
    {{ $object->employment_status_id }}

</div>

<div class="col-md-6">

    <div class="p-details-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#">Job Description</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content review">
        <div role="tabpanel" class="tab-pane active">
            <p>
                {!! nl2br($object->details) !!}
            </p>
        </div>
    </div>

    <div class="p-details-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#">Requirements</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content review">
        <div role="tabpanel" class="tab-pane active">
            <p>
            <ul>
                @foreach($object_requirements as $requirement)
                    <li>{{ $requirement->name }}</li>
                @endforeach
            </ul>
            </p>
        </div>
    </div>
    <div class="p-details-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#">Additional Info</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content review">
        <div role="tabpanel" class="tab-pane active">
            <table class="table">
                <tr>
                    <td>Career Level</td>
                    <td>{{ $object_career->career_level->value }}</td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>{{ $object_career->work_experience->value }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $object_career->gender->value }}</td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td>{{ $object_career->education_level->value }}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td>{{ $object_career->salary_from }} - {{ $object_career->salary_to }}</td>
                </tr>
                <tr>
                    <td>Currency</td>
                    <td>{{ $object_career->currency->value }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="p-details-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#">Specialized in</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content review">
        <div role="tabpanel" class="tab-pane active">
            <ul>
                @foreach($features as $key => $feature)
                    <li>{{ $feature->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="p-details-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                {{ $object->customer->name }} <br>

            </li>
        </ul>
        <a href="#message">Send Message</a>
        <a href="#follow">Follow</a>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content review">
        <div role="tabpanel" class="tab-pane active">
            <p>
                Company Name
                {{ $object_career->company_name }}
            </p>
            <p>
                Company OverView
                {{ $object_career->company_over_view }}
            </p>
            <p>
                Company Size
                {{ $object_career->company_size_id }}
            </p>
            <p>
                Sectors

            </p>
            <p>
                Phone
                {{ $object_career->company_phone_no }}
            </p>
            <p>
                Address
                {{ $object_career->company_address }}
            </p>
            <p>
                ContactEmail
                {{ $object_career->contact_email }}
            </p>
            <p>
                Website
                {{ $object_career->company_website }}
            </p>
        </div>
    </div>
</div>
