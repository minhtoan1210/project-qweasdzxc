<div id="loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<input type="hidden" name="page" data-value="{{ $projects->currentPage() }}">
@if ($projects->count())
        @foreach ($projects as $project)
                {!! Theme::partial('real-estate.projects.item', compact('project')) !!}
            </div>
        @endforeach
@else
    <div class="alert alert-warning" role="alert">
        {{ __('0 results') }}
    </div>
@endif
