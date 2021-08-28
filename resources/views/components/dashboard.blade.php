<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    {{--Styles file included--}}
    @include('faq::admin.partials.style')

</head>

<body style="overflow-y: hidden">

<div id="wrapper" style="overflow: hidden">
    {{--Navbar included--}}
    @include('faq::admin.partials.navbar')

    <div id="page-wrapper">
        <div class="row" style="height: 100vh; overflow-x: hidden; overflow-y:scroll">
            <div class="col-12">
                {{--Main Component Body--}}
                {{$slot}}
            </div>
        </div>
    </div>

</div>
{{--Scripts file included--}}
@include('faq::admin.partials.script')

</body>
</html>


