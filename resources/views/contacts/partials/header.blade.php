<div class="page-header clearfix">

    @guest
        <div class="pull-right">
            <a class="btn btn-info" href="{{route('login')}}" style="float:right" role="button">login</a>
        </div>
    @endguest

    @auth
    <div class="pull-right">
        <a class="btn btn-info" href="{{route('logout')}}" style="float:right" role="button">logout</a>
    </div>
    @endauth

    <h1>
        {{ $title }}
    </h1>
</div>
