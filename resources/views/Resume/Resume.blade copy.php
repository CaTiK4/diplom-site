@extends('layout')
@section('content')


<div class="container-resume">
    <h1>Генерация резюме</h1>
    <form id="resumeForm" class="form-resume">
        <!-- Форма для ввода данных -->
        <label class="label-resume" for="fullName">ФИО</label>
        <input class="input-resume" type="text" id="fullName" name="fullName" required><br>

        <label class="label-resume" for="PhoneNumber">Номер телефона</label>
        <input class="input-resume" type="email" id="PhoneNumber" name="PhoneNumber" required><br>

        <label class="label-resume" for="email">Почта</label>
        <input class="input-resume" type="email" id="email" name="email"><br>

        <label class="label-resume" for="telegram">Телеграм</label>
        <input class="input-resume" type="tel" id="telegram" name="telegram"><br>

        <label class="label-resume" for="SkillsOther">Общие навыки</label>
        <input class="input-resume" type="text" id="SkillsOther" name="SkillsOther" required><br>

        <label class="label-resume" for="skillsProf">Профессиональные навыки</label>
        <textarea class="textarea-resume" id="skillsProf" name="skillsProf" required></textarea><br>

        <label class="label-resume" for="ProfAreas">Профессиональныые области</label>
        <textarea class="textarea-resume" id="ProfAreas" name="ProfAreas" required></textarea><br>
        <h2>ОБРАЗОВАНИЕ</h2>
        <label class="label-resume" for="NameOrganization">Название учебного заведения</label>
        <textarea class="textarea-resume" id="NameOrganization" name="NameOrganization" required></textarea><br>

        <label class="label-resume" for="speciality">Специальность</label>
        <textarea class="textarea-resume" id="speciality" name="speciality" required></textarea><br>

        <label class="label-resume" for="EndStudy">Год окончания</label>
        <input class="input-resume" type="text" id="EndStudy" name="EndStudy"><br>
        <h2>КУРСЫ</h2>
        <label class="label-resume" for="NameCourse">Название</label>
        <textarea class="textarea-resume" id="NameCourse" name="NameCourse" required></textarea><br>

        <label class="label-resume" for="Organization">Организация</label>
        <textarea class="textarea-resume" id="Organization" name="Organization" required></textarea><br>

        <label class="label-resume" for="EndStudyCourse">Год окончания</label>
        <input class="input-resume" type="text" id="EndStudyCourse" name="EndStudyCourse"><br>
        <h2>ОПЫТ РАБОТЫ</h2>
        <label class="label-resume" for="NameOrganizationWork">Организация</label>
        <textarea class="textarea-resume" id="NameOrganizationWork" name="NameOrganizationWork" required></textarea><br>

        <label class="label-resume" for="post">Должность</label>
        <textarea class="textarea-resume" id="post" name="post" required></textarea><br>

        <label class="label-resume" for="DateStart">Дата начала</label>
        <input class="input-resume" type="text" id="DateStart" name="DateStart"><br>

        <label class="label-resume" for="DateEnd">Дата окончания</label>
        <textarea class="textarea-resume" id="DateEnd" name="DateEnd" required></textarea><br>

        <label class="label-resume" for="responsibilities ">Обязанности</label>
        <input class="input-resume" type="text" id="responsibilities " name="responsibilities "><br>

        <button type="submit">Создать резюме</button>
    </form>
</div>

@endsection
