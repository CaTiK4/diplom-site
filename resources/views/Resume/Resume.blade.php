@extends('layout')
@section('content')


<div class="container-resume">
    <h1>Resume Generator</h1>
    <form id="resumeForm" class="form-resume">
        <!-- Форма для ввода данных -->
        <label class="label-resume" for="fullName">Full Name:</label>
        <input class="input-resume" type="text" id="fullName" name="fullName" required><br>

        <label class="label-resume" for="email">Email:</label>
        <input class="input-resume" type="email" id="email" name="email" required><br>

        <label class="label-resume" for="phone">Phone:</label>
        <input class="input-resume" type="tel" id="phone" name="phone" required><br>

        <label class="label-resume" for="telegram">Telegram:</label>
        <input class="input-resume" type="text" id="telegram" name="telegram" required><br>

        <label class="label-resume" for="skills">Skills:</label>
        <textarea class="textarea-resume" id="skills" name="skills" required></textarea><br>

        <label class="label-resume" for="areas">Professional Areas:</label>
        <textarea class="textarea-resume" id="areas" name="areas" required></textarea><br>

        <label class="label-resume" for="experience">Work Experience:</label>
        <textarea class="textarea-resume" id="experience" name="experience" required></textarea><br>

        <label class="label-resume" for="education">Education:</label>
        <textarea class="textarea-resume" id="education" name="education" required></textarea><br>

        <label class="label-resume" for="competitions">Participation in Competitions:</label>
        <input class="input-resume" type="checkbox" id="competitions" name="competitions"><br>

        <button type="submit">Generate Resume</button>
    </form>
</div>

@endsection
