@extends('layout');

@section('content')

    <section class="section-table cid-rM5T3hnL7O" id="table1-5">

        <div class="container container-table">
            <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
                Simple Library App with Laravel
            </h2>
            <div class="table-wrapper">
                <div class="container">
                    <div class="row search">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="dataTables_filter">
                                <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                                <input class="form-control input-sm" disabled="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container scroll">
                    <table class="table isSearch" cellspacing="0">
                        <thead>
                        <tr class="table-heads ">

                            <th class="head-item mbr-fonts-style display-7">AUTHOR NAME</th>
                            <th class="head-item mbr-fonts-style display-7">BOOK NAME</th>
                            <th class="head-item mbr-fonts-style display-7">AUTHOR AGE</th>
                            <th class="head-item mbr-fonts-style display-7">AUTHOR ADDRESS</th>
                            <th class="head-item mbr-fonts-style display-7">RELEASE DATE</th>


                        </tr>
                        </thead>

                        <tbody>

                        @foreach($books as $book)
                        <tr>
                            <td class="body-item mbr-fonts-style display-7">{{ $book->author->name }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $book->name }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $book->author->age }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $book->author->address }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $book->release_date }}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="container table-info-container">
                    <div class="row info">
                        <div class="col-md-6">
                            <div class="dataTables_info mbr-fonts-style display-7">
                                <span class="infoBefore">Showing</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoAfter">entries</span>
                                <span class="infoFilteredBefore">(filtered from</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoFilteredAfter"> total entries)</span>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{--@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
@endsection--}}
