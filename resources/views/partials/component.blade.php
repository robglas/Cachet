<li class="list-group-item {{ $component->group_id ? "sub-component" : "component" }}">
    @if($component->link)
    <a href="{{ $component->link }}" target="_blank" class="links">{{ $component->name }}</a>
    @else
    {{ $component->name }}
    @endif

    @if($component->description)
    <i class="ion-ios-help-outline help-icon" data-toggle="tooltip" data-title="{{ $component->description }}"></i>
    @endif

    <div class="pull-right">
<<<<<<< HEAD
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}">{{ $component->humanStatus }}</small>
=======
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}">{{ $component->human_status }}</small>
>>>>>>> e5c137f82b44a4fbd2d63c36abbfe0cec29ead52
    </div>
</li>
