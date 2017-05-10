<div class="text-center margin-bottom-40 margin-top-40">
    <h1>@lang('advertisement.choose_one_subcategory')</h1>
</div>
<hr>
@forelse($categories as $category)
    <div class="col-md-3" style="padding: 20px;">
        <a href="{{ url('AddAdv/'. $parentCategory->id . '/' . $category->id) }}" class="col-md-12 btn btn-success">
            {{ $category->name }}
        </a>
    </div>
@empty
    <div class="col-md-6" style="padding: 20px;">
        <a href="{{ url('AddAdv/'. $parentCategory->id ) }}" class="col-md-12 btn btn-success">
            @lang('advertisement.add_to_main_caetgory')
        </a>
    </div>
@endforelse
<div class="clearfix"></div>