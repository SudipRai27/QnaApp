@if (session('success-msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Operation Successful !</strong>
        {{ session('success-msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('error-msg'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Operation UnSuccessful !</strong>
        {{ session('success-msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('warning-msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning !</strong>
        {{ session('success-msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
