<script type="text/javascript">
    $(function () {
        $(document).on('change', "input[type='checkbox']", function () {
            if ($(this).is(':checked')) {
                window.location.href = '{{ Request::url() }}?hot=1';
            } else {
                window.location.href = '{{ Request::url() }}';
            }
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