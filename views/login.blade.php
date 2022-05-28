@extends('layout')
@section('content')
@if ($errors->any())
        <div class="w-100 alert alert-danger position-absolute">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<main
        class="container vh-100 d-flex col col-xxl-4 col-md-6 align-items-center justify-content-center"
    >
        <div class="card w-100 h-75 mx-auto p-2">
            <div
                class="card-body d-flex flex-column align-items-center justify-content-center"
            >
                <div
                    class="w-50 d-flex flex-column align-items-center justify-content-center"
                >
                    <img
                        src="/storage/reverse_proxy_logo.png"
                        class="mb-3 w-50"
                    />
                    <span class="mb-3 display-6">Login<span/>
                </div>
                <form class="w-75 mb-5" method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label"
                            >Email address</label
                        >
                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="name@example.com"
                        />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"
                            >Password</label
                        >
                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="form-control"
                            placeholder="********"
                        />
                    </div>
                    <div class="mb-5 d-flex justify-content-start">
                        <div class="btn-group" role="group">
                            <input 
                                id="remember"
                                name="remember"
                                type="checkbox" 
                                class="btn-check"
                            />
                            <label 
                                for="remember"
                                class="btn btn-sm btn-outline-secondary"
                            >Remember me</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button
                            class="btn btn-lg btn-secondary w-50"
                            type="submit"
                        >
                            Login
                        </button>
                        <button
                            class="btn btn-lg w-50"
                            type="reset"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection