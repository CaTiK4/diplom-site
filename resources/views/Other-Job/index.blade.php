@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Иные виды занятости</h1>
    <br>
    <button>Добавить запись</button>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>ИП</th>
                <th>Будет ИП</th>
                <th>Самозанятый (-ая)</th>
                <th>Будет самозанытям (-ой)</th>
                <th>Неформальная занятость (теневой сектор экономики)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->Name}}</td>
                    <td>{{$student->Surname}}</td>
                    <td>{{$student->Patronymic}}</td>
                    <td>{{$student->DateOfBirth}}</td>
                    <td>{{$student->edicationgOrganization->Title}}</td>
                    <td>{{$student->speciality->Title}}</td>
                    <td>{{$student->courseOfStudy->Title}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
