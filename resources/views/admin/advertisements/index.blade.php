@extends('admin.layout.app')

@section('title', ' | ' . __('advertisements.heading_title'))

@section('content')
    {!! Form::open(['url' => 'admin/advertisement/delete']) !!}
    <!-- BEGIN PAGE HEAD-->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>{{ __('advertisements.heading_title') }}</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="pull-right">
            <button class="btn red delete" type="submit">
                <i class="fa fa-remove"></i>
                {{ __('common.button_delete') }}
            </button>
        </div>
    </div>
    @include('admin.common.breadcrumbs')
    <div class="row">
        <div class="col-md-12">
        @include('admin.common.message')
        <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-globe font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">
						{{ __('advertisements.list') }}
					</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="20"> <input type="checkbox" id="check_all"> </th>
                                <th width="50"> </th>
                                <th> {{ __('advertisements.title') }} </th>
                                <th> {{ __('advertisements.category') }} </th>
                                <th> {{ __('advertisements.createdAt') }} </th>
                                <th> {{ __('advertisements.createdBy') }} </th>
                                <th width="100"> {{ __('advertisements.status') }} </th>
                                <th width="100">  </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($objects as $object)
                                <tr>
                                    <td> <input name="selected[]" type="checkbox" class="check" value="{{ $object->id }}" /> </td>
                                    <td>
                                        @if( $object['image'] != '')
                                            {!! Html::image(url('image/50×50/' . $object['image'])) !!}
                                        @endif
                                    </td>
                                    <td> {{ $object->title }} </td>
                                    <td> {{ $object->category->title }} </td>

                                    <td> {{ $object->user_id }} </td>
                                    <td> {{ Carbon\Carbon::parse($object->created_at)->formatLocalized('%A, %d %B %Y %H:%M')  }} </td>
                                    <td> {{ $object->status_alias }} </td>
                                    <td>
                                        <a href="{{ route('admin.advertisements.edit',$object->id ) }}" class="btn btn-icon-only purple">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.advertisements.destroy', $object->id) }}" class="btn btn-icon-only red " data-method="delete">
                                            <i class="fa fa-remove "></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        {{ __('common.no_results') }}
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    {!! str_replace('/?', '?', $objects->render()) !!}
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- END DASHBOARD STATS 1-->
    <!-- END PAGE BASE CONTENT -->
    {!! Form::close() !!}
@stop