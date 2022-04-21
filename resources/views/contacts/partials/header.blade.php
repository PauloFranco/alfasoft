<div class="page-header clearfix">

    <div class="pull-right">
        <a class="btn btn-info" href="{{route('contacts.index')}}" style="float:right" role="button">Contatos</a>

        @include('contacts.partials.action-buttons', [
            'contact'    => $contact,
            'showLabel' => true,
            'except'    => $except,
        ])
    </div>

    <h1>
        {{ $title }}
    </h1>
</div>
