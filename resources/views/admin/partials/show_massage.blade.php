<x-faq-notifier action="save" message="saved"/>
<x-faq-notifier action="update" message="updated"/>
<x-faq-notifier action="publish" message="published"/>
<x-faq-notifier action="unPublish" message="unpublished"/>
<x-faq-notifier action="delete" message="deleted"/>

@if(Session::get('error'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.error('FAQ was not saved, This priority already exist!!');
    </script>
@endif

