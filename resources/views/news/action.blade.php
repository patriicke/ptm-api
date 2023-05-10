<div class="">
  {{-- @if (Auth::id() == $principal_id) --}}
  <a href="edit-news/{{$id}}" class="btn btn-sm bg-danger-light">
    <i class="feather-edit text-primary"></i>
  </a>
        <a onclick="on_delete({{$id}})"  class="btn btn-sm  bg-danger-light ">
            <i  class="feather-trash text-danger"  ></i>
        </a>
  {{-- @endif --}}

</div>
