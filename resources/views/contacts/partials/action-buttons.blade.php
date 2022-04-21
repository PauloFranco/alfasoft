@if(isset($contact))
    @include('common.action-button.view', [
        'action'    => route('contacts.show', compact('contact')),
        'showLabel' => $showLabel,
        'show'      => true,
    ])
@endif




@if(isset($contact))
    @include('common.action-button.edit', [
        'action'    => route('contacts.edit', compact('contact')),
        'showLabel' => $showLabel,
        'show'      => true,
    ])
@endif