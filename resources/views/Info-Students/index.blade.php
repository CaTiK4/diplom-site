@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Основная информация о студентах</h1>
    <br>
    <a href="{{route('Info-Students.create')}}">Добавить запись</a>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Отчество</th>
                    <th>Дата рождения</th>
                    <th>Образовательная организация</th>
                    <th>Код и Наименование специальности</th>
                    <th>Курс обучения</th>
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
                        <td><button>Изменить</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
