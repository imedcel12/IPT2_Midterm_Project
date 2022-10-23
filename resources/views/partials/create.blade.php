<div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-dark text-center" style="background-color:rgb(254, 205, 112, 0.7)">
            <h3 class="modal-title" id="createPostModalLabel"> <img src="https://cdn-icons-png.flaticon.com/512/3384/3384438.png" width="30" height="30" class="rounded"> Create Post</h3> <hr>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body bg-primary">
            {!! Form::open(["url" => "/dashboard", 'method' => 'post']) !!}
            @include('partials.form')
            <div class="form-group">
                <button class="btn btn-success" id="actionBtn" onclick="btnload()"> Create Post</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
