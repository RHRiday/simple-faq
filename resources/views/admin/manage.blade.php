<x-faq-dashboard>

    <div class="row">
        <div class="col-md-11" style="margin-top: 30px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Manage FAQs</h4>
                        </div>

                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal"
                                data-target="#addModal">
                                Add more
                            </button>
                        </div>
                    </div>
                    <hr />

                    {{-- Show massege included --}}
                    @include('faq::admin.partials.show_massage')

                    {{-- Data Table --}}

                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody id="data_sortable">
                            @php($i = 1)
                            @foreach ($faqs as $faq)
                                <tr data-index="{{ $faq->id }}" data-position="{{ $faq->priority }}">
                                    <td>{{ $i }}.</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                    <td>
                                        @if ($faq->publication_status == 1)
                                            <a href="{{ url('/unpublished_faq', ['id' => $faq->id]) }}"
                                                class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ url('/published_faq', ['id' => $faq->id]) }}"
                                                class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="#" data-id="{{ $faq->id }}" class="btn btn-success btn-xs edit"
                                            data-toggle="modal" data-target="#editModal">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal"
                                            data-target="#delModal{{ $faq->id }}">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>

                                        {{-- Delete modal --}}
                                        <div class="modal fade" id="delModal{{ $faq->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel">Confirm Delete
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-1"></div>
                                                            <div class="col-md-10"
                                                                style="background: white; padding: 20px">
                                                                <div class="box-body">
                                                                    <p class="form-group">{{ $faq->question }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a href="{{ url('/delete_faq', ['id' => $faq->id]) }}"
                                                                        class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                @php($i++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- Add Modal --}}
    <x-faq-modal id="addModal" name="Add FAQ" action="/add_faq" />

    {{-- Update Model --}}
    <x-faq-modal id="editModal" name="Update FAQ" action="/update_faq" status="hidden" cid1="question" cid2="answer"
        cid3="priority" cid4="published" cid5="unpublished">
        <input type="hidden" name="id" id="faq_id" required>
    </x-faq-modal>


    <script>
        $("#data_sortable").sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('update')
                    }
                })
                saveNewPositions();
            }
        });

        function saveNewPositions() {
            var positions = [];
            $('.update').each(function() {
                positions.push([
                    $(this).attr('data-index'),
                    $(this).attr('data-position')
                ]);
            })
            $.ajax({
                methods: "POST",
                url: "{{ url('/priority-set/') }}",
                data: {
                    update: 1,
                    position: positions
                },
                success: function(data) {
                    console.log(data)
                },
                error: function() {
                    window.location.replace(auto_save_url);
                }
            });
        }
    </script>
    <script>
        $("#sortable").sortable();
    </script>

</x-faq-dashboard>
