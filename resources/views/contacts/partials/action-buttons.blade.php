@if(isset($contact) && !$contact->deleted_at)
    @include('common.action-button.view', [
        'action'    => route('contacts.show', compact('contact')),
        'showLabel' => $showLabel,
        'show'      => true,
    ])

    @include('common.action-button.edit', [
            'action'    => route('contacts.edit', compact('contact')),
            'showLabel' => $showLabel,
            'show'      => true,
        ])
        
    @include('common.action-button.delete', [
        'action'    => route('contacts.destroy', compact('contact')),
        'confirm'   => "Remover o contato \"{$contact->name}\"?",
        'showLabel' => $showLabel,
        'show'      => true,
    ])
@endif
