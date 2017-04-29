@extends('admin.layout.app')
@section('title', ' | ' . trans('category.heading_title'))
@section('content')
    {!! Form::open(['url' => 'admin/categories/delete']) !!}
    <div class="page-head">
        <div class="page-title">
            <h1>{{ trans('category.heading_title') }}</h1>
        </div>
        <div class="pull-right">
            <a href="{{ url('admin/category/create') }}" class="btn green">
                <i class="fa fa-plus"></i>
                {{ trans('admin/common.button_add') }}
            </a>
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
						{{ trans('category.list') }}
					</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="20"><input type="checkbox" id="check_all"></th>
                                <th> {{ trans('category.title') }} </th>
                                <th width="100"> {{ trans('category.sort_order') }} </th>
                                <th width="100"> {{ trans('category.status') }} </th>
                                <th width="100"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($objects as $object)
                                <tr>
                                    <td><input name="selected[]" type="checkbox" class="check"
                                               value="{{ $object->id }}"/></td>
                                    <td> {{ $object->title }} </td>
                                    <td> {{ $object->sort_order }} </td>
                                    <td> {{ $object->status }} </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit',$object->id ) }}"
                                           class="btn btn-icon-only purple">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.category.destroy', $object->id) }}"
                                           class="btn btn-icon-only red " data-method="delete">
                                            <i class="fa fa-remove "></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        {{ trans('common.no_results') }}
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