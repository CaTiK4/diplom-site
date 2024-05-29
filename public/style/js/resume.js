function generateResume(event) {
    event.preventDefault(); // Предотвращаем отправку формы по умолчанию

// Собираем данные из формы
let fullName = document.getElementById('fullName').value;
let email = document.getElementById('email').value;
let phone = document.getElementById('phone').value;
let telegram = document.getElementById('telegram').value;
let skills = document.getElementById('skills').value;
let areas = document.getElementById('areas').value;
let experience = document.getElementById('experience').value;
let education = document.getElementById('education').value;
let competitions = document.getElementById('competitions').checked ? 'Yes' : 'No';

    // Создаем PDF
var docInfo = {
    Info: {
        title:'Резюме'
    },
    pageSize:'A4',
    pageOrientation:'portrait',

    content: [`ФИО: ${fullName}`,
    `Почта: ${email}`,
    `Телефон: ${phone}`,
    `Телеграмм: ${telegram}`,
    `Навыки:\n${skills}`,
    `Профессиональные области:\n${areas}`,
    `Опыт работы:\n${experience}`,
    `Образование:\n${education}`,
    `Участие в соревнованиях: ${competitions}`,
    ]
}
pdfMake.createPdf(docInfo).download('resume.pdf')
}

document.getElementById('resumeForm').addEventListener('submit', generateResume);
