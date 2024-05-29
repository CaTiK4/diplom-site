@extends('layout')
@section('content')

<form method="POST" action="{{route('Info-Students.store')}}">
    @csrf
    <label class="form-label" for="surname">Фамилия</label>
        <input class="form-control" type="text" name="surname" id="surname" >
        <p>@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif</p>
        <label class="form-label" for="name">Имя</label>
        <textarea class="form-control" name="name" id="surname" ></textarea>

        <label class="form-label" for="patronymic">Отчество</label>
        <input class="form-control" type="patronymic" name="patronymic" id="price">

        <label class="form-label" for="dateOfBirth">Дата рождения</label>
        <input class="form-control" type="text" name="dateOfBirth" id="dateOfBirth" >

        <label class="form-label" for="edicationgOrganization">Образовательная организация</label>
        <select name="edicationgOrganization" id="edicationgOrganization" class="form-select">
            @foreach ($edicationgOrganizations as $edicationgOrganization)
                <option value="{{$edicationgOrganization->id}}">{{$edicationgOrganization->Title}}</option>
            @endforeach
        </select>

        <label class="form-label" for="speciality">Код и наименование специальности</label>
        <select name="speciality" id="speciality" class="form-select">
            @foreach ($specialities as $speciality)
                <option value="{{$speciality->id}}">{{$speciality->Title}}</option>
            @endforeach
        </select>

        <label class="form-label" for="courseOfStudy">Курс обучения</label>
        <select name="courseOfStudy" id="courseOfStudy" class="form-select">
            @foreach ($coursesOfStudy as $courseOfStudy)
                <option value="{{$courseOfStudy->id}}">{{$courseOfStudy->Title}}</option>
            @endforeach
        </select>

        {{-- <label class="form-label" for="financing">Финансирование</label>
        <select name="financing" id="financing" class="form-select">
            @foreach ($financing as $financing)
                <option value="{{$financing->id}}">{{$financing->title}}</option>
            @endforeach
        </select> --}}

<button type='submit'>Добавить</button>
</form>

@endsection
