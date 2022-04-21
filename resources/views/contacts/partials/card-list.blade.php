<ul class="list-group">
    @forelse($contacts as $contact)
        @include('contacts.partials.card', compact('contact'))
    @empty
    @auth
            <li class="list-group-item text-center text-muted">
                Use o botão
                @include('contacts.partials.create-button', [ 'show' => true ])
                para cadastrar o primeiro contato.
            </li>
        @endauth
    @guest
            <h1>Não há contatos cadastrados no momento.</h1>
    @endguest
    @endforelse
</ul>
