@extends('layouts.app')
@section('content')
@yield('content')
<!-- Like Modal -->
<div class="modal fade" id="likesModal" tabindex="-1" role="dialog" aria-labelledby="likesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="likesModalLabel">People who like this</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@endsection
