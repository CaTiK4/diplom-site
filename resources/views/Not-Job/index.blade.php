@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Причины отстуствия трудоуствойства / иных видов занятости</h1>
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
                <th>Зарегистрирован (-а) в центре занятости в качестве безработного (-ой) (получает пособие по безработице) и не планирует трудоустраиваться</th>
                <th>Не имеет мотивации к трудоустройству (кроме зарегистрированных в качестве безработных) и не планирует трудоустраиваться, в том числе по причинам получения иных социальных льгот</th>
                <th>Иные причины нахождения под риском нетрудоустройства (-ая)</th>
                <th>Смерть, тяжелое состояние здоровья</th>
                <th>Находится под следствием, отбывает наказание</th>
                <th>Переезд за пределы Российской Федерации</th>
                <th>Не может трудоустроиться в связи с уходом за больными родственниками, в связи с иными семейными обстоятельствами</th>
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
