@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Практика</h1>
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
                <th>ИНН организации</th>
                <th>Наименование организации</th>
                <th>Проходит срочную службу в армии по призыву</th>
                <th>Статус ОПК</th>
                <th>Вид практики</th>
                <th>Дата начала практики</th>
                <th>Дата окончания практики</th>
                <th>Будет проходить практику на предприятии ОПК</th>
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