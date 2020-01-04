@extends('layout');

@section('content')

    <section class="section-table cid-rM5T3hnL7O" id="table1-5">

        <div class="container container-table">
            <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
                Simple Library App with Laravel
            </h2>
            <form method="POST" action="/">
                @csrf
                <div class="row pb-2">
                    <div class="col">
                        <input type="text" class="form-control {{ $errors->has('author_name') ? 'is-invalid' : ''}}" name="author_name" placeholder="Author name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control {{ $errors->has('book_name') ? 'is-invalid' : ''}}" name="book_name" placeholder="Book name" required>
                    </div>
                </div>

                <div class="row pb-2">
                    <div class="col">
                        <input type="number" class="form-control {{ $errors->has('age') ? 'is-invalid' : ''}}" name="age" placeholder="Author age" required>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control {{ $errors->has('release_date') ? 'is-invalid' : ''}}" name="release_date" placeholder="Release date" required>
                    </div>
                </div>

                <div class="row pb-2">
                     <div class="col">
                         <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" name="address" placeholder="Author Address" required>
                     </div>
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
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

                        @foreach($books as $library)
                        <tr>
                            <td class="body-item mbr-fonts-style display-7">{{ $library->author->author_name }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $library->book_name }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $library->author->age }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $library->author->address }}</td>
                            <td class="body-item mbr-fonts-style display-7">{{ $library->release_date }}</td>
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
