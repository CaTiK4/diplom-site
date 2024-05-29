@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Продолжение обучения и армия</h1>
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
                <th>Продолжил (-а) обучение</th>
                <th>Будет продолжать обучение</th>
                <th>Проходит срочную службу в армии по призыву</th>
                <th>Плановый год окончания военной службы</th>
                <th>Завершил военную службу</th>
                <th>Подлежит призыву в армию</th>
                <th>Выпускник готов трудоустроиться на предприятие оборонно-промышленного комплекса, но подлежит призыву в армию</th>
                <th>Проходит службу в армии на контрактной основе</th>
                <th>Будет проходить службу в армии на контрактной основе</th>
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
