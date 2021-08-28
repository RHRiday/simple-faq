<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$name}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="background: white; padding: 20px">
                            <form action="{{$action}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    {{$slot}}
                                    <div class="form-group">
                                        <label>Question:</label>
                                        <input type="text" name="question" class="form-control"
                                               placeholder="Enter Question" id="{{$cid1}}" required>

                                    </div>

                                    <div class="form-group">
                                        <label>Answer:</label>
                                        <textarea name="answer" class="form-control" required
                                                  placeholder="Answer write here..." id="{{$cid2}}"></textarea>
                                    </div>

                                    <div class="form-group" {{$status}}>
                                        <label>Priority:</label>
                                        <input type="number" name="priority" class="form-control" id="{{$cid3}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Publication Status: </label>
                                        <input type="radio" required id="{{$cid4}}" name="publication_status" value="1">Published
                                        <input type="radio" required id="{{$cid5}}" name="publication_status" value="0">Unpublished
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>