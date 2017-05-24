@hasrole('Admin')
@include('adforest.common.message')
<div class="pull-right">
    @if($object->status != 'approved')
        <a class="btn btn-primary"
           href="{{ url('advertisement/' . $object->id . '/approved') }}">@lang('advertisement.approved')</a>
    @endif
    @if($object->status != 'waiting_approval')
        <a class="btn btn-danger"
           href="{{ url('advertisement/' . $object->id . '/waiting_approval') }}">@lang('advertisement.waiting_approval')</a>
    @endif
    @if($object->status != 'blocked')
        <a class="btn btn-danger"
           href="{{ url('advertisement/' . $object->id . '/blocked') }}">@lang('advertisement.blocked')</a>
    @endif
    @if($object->status != 'expired')
        <a class="btn btn-danger"
           href="{{ url('advertisement/' . $object->id . '/expired') }}">@lang('advertisement.approved')</a>
    @endif
    @if($object->status != 'rejected')
        <a class="btn btn-danger"
           href="{{ url('advertisement/' . $object->id . '/rejected') }}">@lang('advertisement.approved')</a>
    @endif
</div>
<div class="clearfix" style="margin-bottom: 20px"></div>
@endhasrole