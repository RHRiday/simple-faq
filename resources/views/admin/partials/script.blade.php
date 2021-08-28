


<script src="{{asset('/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="https://kit.fontawesome.com/7f68bcaf19.js"></script>

<script src="{{asset('/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

<script src="{{asset('/admin/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/admin/vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('/admin/data/morris-data.js')}}"></script>

<script src="{{asset('/admin/js/script.js')}}"></script>

<script src="{{asset('/admin/dist/js/sb-admin-2.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(function () {
        $('.edit').click(function () {
            var faq_id = $(this).attr('data-id');

            $.ajax({
                url: "{{ url('/edit_faq/') }}/"+faq_id,
                success: function(result){
                    $('#faq_id').val(result.id)
                    $('#question').val(result.question)
                    $('#answer').val(result.answer)
                    $('#priority').val(result.priority)
                    if(result.publication_status == 1){
                        $('#published').prop('checked',true)
                    }else {
                        $('#unpublished').prop('checked',true)
                    }
                    console.log(result.question);
                }});
        })
    })

</script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>