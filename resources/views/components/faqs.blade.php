<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PONDITs FAQ</title>

    {{-- Styles file included --}}
    @include('faq::layouts.partials.style')

    <style>
        body {
            overflow-x: hidden;
        }

    </style>

</head>

<body>
    <div class="container">
        {{-- Header file included --}}
        @include('faq::layouts.partials.header')
    </div>

    <div class="row tob_bar pt-3 pb-2 pb-md-5">
        <div class="col-12 text-center my-1 my-md-4">
            <h1 class="my_h1"> <span class="type"></span></h1>
        </div>
        <div class="col-10 col-md-6 mx-auto">
            <input type="text" id="search" class="form-control search_form p-md-4"
                placeholder="&#xf002; Search for questions...">
        </div>
    </div>

    <div class="row my_content">
        <div class="col-md-12">
            <div class="container">
                <div class="row" style="margin-top: 30px">
                    {{-- Sidebar included --}}
                    {{-- @include('view.layouts.partials.sidebar') --}}

                    {{-- Main Component Body --}}
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    {{-- Footer included --}}
    @include('faq::layouts.partials.footer')


</body>

</html>
