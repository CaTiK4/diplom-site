@extends('layout')
@section('content')

<div class="container-fluid">
    <h1> Сведения об ОВЗ и инвалидности</h1>
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
                <th>ОВЗ или инвалидность</th>
                <th>Вид ОВЗ</th>
                <th>Группа инвалидности</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disabilities as $disability)
                <tr>
                    <td>{{$disability->student->id}}</td>
                    <td>{{$disability->student->Name}}</td>
                    <td>{{$disability->student->Surname}}</td>
                    <td>{{$disability->student->Patronymic}}</td>
                    <td>{{$disability->illness->Title}}</td>
                    <td>{{$disability->typeOfHealth->Title}}</td>
                    <td>{{$disability->disabilityGroup->Title}}</td>
                    <td><button>Изменить</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
