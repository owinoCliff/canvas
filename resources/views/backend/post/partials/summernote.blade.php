<script type="text/javascript">
    $(document).ready(function(){

        $('button[data-name="picture"]').hide();
        $('.publish_date').mask('00/00/0000 00:00:00');

    });

    $('#editor').summernote({

        placeholder: 'Content',
        height: 300,

    });
</script>