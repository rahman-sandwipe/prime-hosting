

<section class="single-banner" id="attributeBox">
    <h1><span class="attributeName"></span></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('homePage') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span class="attributeName"></span></li>
    </ol>
</section>

<script>
    $(document).on('click', '.load-attribute', function(e) {
        e.preventDefault(); // prevent page reload
        var attrId = $(this).data('attribute-id');
        $.ajax({
            url: '/attribute-details/' + attrId,
            method: 'GET',
            success: function(response) {
                $('.attributeName').text(response.attribute.attribute_name);
            },
            error: function(error) {
                console.error("Error fetching attribute:", error);
            }
        });
    });
</script>
