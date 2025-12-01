@extends('layouts.admin.app')

@section('content')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tambah User</h1>
                    <p class="mb-0">Form untuk menambah User baru</p>
                </div>
                <div>
                    <a href="{{route('user.index')}}"
                        class="btn btn-primary"><i class="far fa-question-circle me-1"></i> Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Form Pendaftaran User (Customer Registration Form)</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-info">
                                {!! session('success') !!}
                            </div>
                        @endif

                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ old('name') }}" placeholder="Masukkan nama lengkap"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ old('email') }}" placeholder="contoh@domain.com" required>
                                        <small class="form-text text-muted">Masukkan email</small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="password">password </label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="{{ old('password') }}" placeholder="Sid-kartun123" required>
                                        <small class="form-text text-muted">Masukkan Password</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                            placeholder="Konfirmasi Password" required>
                                        <small class="form-text text-muted">Konfirmasi Password</small>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
