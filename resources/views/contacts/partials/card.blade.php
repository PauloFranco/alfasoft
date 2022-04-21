<li class="list-group-item ">
    <div class="row">
        <div class="col-sm-8">
            <h4 class="no-margin-top">{{ $contact->name}}</h4>

            @include('contacts.partials.card-content', compact('contact'))
        </div>

        <hr class="visible-xs-block mrg-v-10">

        <div class="col-sm-4 text-right no-wrap">
            @include('contacts.partials.action-buttons', [
                'user'    => $contact,
                'showLabel' => false,
                'except'    => [ 'back' ],
            ])
        </div>
    </div>
</li>
