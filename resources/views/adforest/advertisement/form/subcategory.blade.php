<div class="clearfix margin-top-20"></div>
<div class="subcategory">
    @if($categories->count())
        <h3>@lang('advertisement.choose_one_subcategory')</h3>
        <hr>
        @foreach($categories as $category)
            <a href="{{ url('getSubCategories/' . $category_id .'/'. $category->id) }}"
               class="btn btn-success ajax" style="padding: 10px; margin: 10px">
                {{ $category->name }}
            </a>
        @endforeach
    @else
        <div style="color: darkgreen">
            <i class="fa fa-apply"></i>
            <h4>@lang('advertisement.category_selection_completed')</h4><br>
                <a href="{{ url('AddAdv/'. $category_id .'/'.  $subcategory->id ) }}" class=" btn btn-success">
                    @lang('advertisement.add_to') : {{ $subcategory->name }}
                </a>
        </div>

    @endif
    <div class="results"></div>
</div>