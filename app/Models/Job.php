<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id',
        'Name',
        'Surname',
        'Patronymic',
        'DateOfBirth',
        'EdicationgOrganization',
        'Speciality',
        'CourseOfStudy',
    ];
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
}
