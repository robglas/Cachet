<ul class="list-group components">
    @if($component_groups->count() > 0)
    @foreach($component_groups as $componentGroup)
<<<<<<< HEAD
    @if($componentGroup->components()->enabled()->count() > 0)
    <li class="list-group-item group-name">
        <i class="ion-ios-minus-outline group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>
    </li>

    <div class="group-items">
    @foreach($componentGroup->components()->enabled()->orderBy('order')->get() as $component)
=======
    @if($componentGroup->enabled_components->count() > 0)
    <li class="list-group-item group-name">
        <i class="ion-ios-minus-outline group-toggle"></i>
        <strong>{{ $componentGroup->name }}</strong>

        <div class="pull-right">
            <i class="ion-ios-circle-filled text-component-{{ $componentGroup->lowest_status }} {{ $componentGroup->lowest_status_color }}" data-toggle="tooltip" title="{{ $componentGroup->lowest_human_status }}"></i>
        </div>
    </li>

    <div class="group-items">
    @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    @include('partials.component', compact($component))
    @endforeach
    </div>
    @endif
    @endforeach
    @if($ungrouped_components->count() > 0)
    <li class="list-group-item break"></li>
    @endif
    @endif

    @if($ungrouped_components->count() > 0)
    @foreach($ungrouped_components as $component)
    @include('partials.component', compact($component))
    @endforeach
    @endif
</ul>
