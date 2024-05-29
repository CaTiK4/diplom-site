@extends('layout')
@section('content')

<div class="container-fluid">
    <h1>Трудоустройство</h1>
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
                <th>Трудоустройство по труд. договору ГПХ</th>
                <th>Отрасль организации</th>
                <th>ИНН организации</th>
                <th>Наименование организации</th>
                <th>Статус ОПК</th>
                <th>Заключено соглашение о сотрудничестве (практика или трудоустройство)</th>
                <th>Должность</th>
                <th>Наименование профессии, должности на предприятии по ОКПДТР</th>
                <th>Дата заключения договора</th>
                <th>Дата расторжения договора</th>
                <th>Переведён на ИУП</th>
                <th>Трудоустройство по специальности</th>
                <th>Разряд</th>
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
