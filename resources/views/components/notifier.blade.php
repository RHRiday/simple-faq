@if(session()->has($action))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.success('Faq has been {{$message}} successfully');
    </script>
@endif