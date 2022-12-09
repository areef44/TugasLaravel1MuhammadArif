@extends('template')
@php
$users =
    [
        [
            "nama" => 'Endji',
            "foto" => 'https://avatars.githubusercontent.com/u/55825607?v=4',
            "bio" => 'PHP Developer',
            "active" => true,
            "alamat" => 'Jepara',
            "role" => 'Admin'
        ],
        [
            "nama" => 'Obi',
            "foto" => 'https://avatars.githubusercontent.com/u/51530301?v=4',
            "bio" => 'Laravel Developer',
            "active" => true,
            "alamat" => 'Jayapura',
            "role" => 'Admin'
        ],
        [
            "nama" => 'Tegar',
            "foto" => 'https://avatars.githubusercontent.com/u/33692434?v=4',
            "bio" => 'Golang Developer',
            "active" => false,
            "alamat" => 'Medan',
            "role" => 'User'
        ],
        [
            "nama" => 'Mas Tino',
            "foto" => 'https://avatars.githubusercontent.com/u/29315832?v=4',
            "bio" =>  'Expressjs Developer',
            "active" => false,
            "alamat" => 'Bekasi',
            "role" => 'User'
        ],
        [
            "nama" => 'Basafi',
            "foto" => 'https://avatars.githubusercontent.com/u/54464505?v=4',
            "bio" =>  'Nestjs Developer',
            "active" => false,
            "alamat" => 'Surabaya',
            "role" => 'User'
        ],
        [
            "nama" => 'Hanif',
            "foto" => 'https://avatars.githubusercontent.com/u/78013739?v=4',
            "bio" => 'PHP Developer',
            "active" => true,
            "alamat" => 'Majalaya',
            "role" => 'Admin'
        ],
        [
            "nama" => 'Rijal',
            "foto" => 'https://avatars.githubusercontent.com/u/45933947?v=4',
            "bio" => 'Laravel Developer',
            "active" => true,
            "alamat" => 'Bandung Barat',
            "role" => 'Admin'
        ],
        [
            "nama" => 'Ichsan',
            "foto" => 'https://avatars.githubusercontent.com/u/60373233?v=4',
            "bio" => 'Golang Developer',
            "active" => false,
            "alamat" => 'Bandung',
            "role" => 'User'
        ],
        [
            "nama" => 'Mahir',
            "foto" => 'https://avatars.githubusercontent.com/u/80139530?v=4',
            "bio" =>  'Expressjs Developer',
            "active" => false,
            "alamat" => 'Pekalongan',
            "role" => 'User'
        ],
        [
            "nama" => 'Rendi',
            "foto" => 'https://avatars.githubusercontent.com/u/110674466?v=4',
            "bio" =>  'Nestjs Developer',
            "active" => false,
            "alamat" => 'Pemalang',
            "role" => 'User'
        ]
    ];

    $filter = [
        'active' => true,
        'role'   => 'Admin'
    ]
@endphp
@section ('content')
<div class="w-full">
<h1 class="mx-auto w-max font-bold text-3xl">Daftar Admin</h1>
</div>

@endsection
@section ('table')
<section id="hero" class="grid grid-cols-4">
@foreach($users as $user)
    @includeWhen($user['active'] == $filter['active'] && $user['role'] == $filter['role'],'card')
@endforeach
</section>


@endsection