<script type="text/javascript">
    $(function () {
        $(document).on('change', "input[name='hotselling']", function () {
            var query = '?';
            if ($(this).is(':checked')) {
                query += 'hot=1'
            }

            $.get("{{ url('AddAdv/billing') }}" + query, function (data) {
                $("#billing").html(data);
            });
        });

        $(document).on('keyup', "input[name='coupon']", function (e) {
            var query = '?';

            query += 'coupon=' + $(this).val();

            $.get("{{ url('checkCoupon') }}" + query, function (data) {
                $("#coupon_result").html(data);
            });
        });

        var count = 2;

        $(document).on('click', "button.plus", function () {
            var html = $(this).closest('.form-group').html();
            $(this).closest('.form-group').after('<div class="form-group @if ($errors->has('requirements[1][name]')) has-error @endif">' +
                    '<div class="input-group">' +
                    '<input type="text" name="requirements[' + ++count + '][name]" value="" class="form-control" placeholder="@lang('advertisement.requirements')" />' +
                    '<span class="input-group-btn">' +
                    '<button class="btn btn-secondary minus" type="button"' +
                    ' style="padding: 11px 17px !important;font-size: 15pt;">-</button>' +
                    '</span>' +
                    '</div>' +
                    '</div>'
            );
        });
        $(document).on('click', "button.minus", function () {
            $(this).closest('.form-group').remove();

        });
    });

    function createCompany(event) {
        $('input[name=lat]').val(event.latLng.lat());
        $('input[name=lon]').val(event.latLng.lng());
    }

    $("[type=file]").change(function () {

        var file = this.files[0],
                reader = new FileReader(),
                img = $('#img')
        reader.onload = function (e) {
            img.attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    })
</script>

{!! Mapper::renderJavascript() !!}

<style>
    #img {
        max-width: 300px;
        max-height: 300px;
        display: block;
    }
</style>