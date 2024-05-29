function generateResume(event) {
    event.preventDefault(); // Предотвращаем отправку формы по умолчанию

// Собираем данные из формы
let fullName = document.getElementById('fullName').value;
let email = document.getElementById('email').value;
let PhoneNumber = document.getElementById('PhoneNumber').value;
let telegram = document.getElementById('telegram').value;
let SkillsOther = document.getElementById('SkillsOther').value;
let ProfAreas = document.getElementById('ProfAreas').value;
let skillsProf = document.getElementById('skillsProf').value;
let NameOrganization = document.getElementById('NameOrganization').value;
let speciality = document.getElementById('speciality').value;
let EndStudy = document.getElementById('EndStudy').value;
let NameOrganizationWork = document.getElementById('NameOrganizationWork').value;
let post = document.getElementById('post').value;
let DateStart = document.getElementById('DateStart').value;
let DateEnd = document.getElementById('DateEnd').value;
let responsibilities = document.getElementById('responsibilities').value;

    // Создаем PDF
var docInfo = {
    Info: {
        title:'Резюме'
    },
    pageSize:'A4',
    pageOrientation:'portrait',

    content: [`ФИО: ${fullName}`,
    `Почта: ${email}`,
    `Номер телефона: ${PhoneNumber}`,
    `Телеграмм: ${telegram}`,
    `Общие навыки:\n${SkillsOther}`,
    `Профессиональные области:\n${ProfAreas}`,
    `Профессиональные навыки:\n${skillsProf}`,
    `Название учебного заведения:\n${NameOrganization}`,
    `Год окончания\n${EndStudy}`,
    `Организация\n${NameOrganizationWork}`,
    `Должность\n${post}`,
    `Дата начала\n${DateStart}`,
    `Дата окончания\n${DateEnd}`,
    `Обязанности\n${responsibilities}`,

    ]
}
pdfMake.createPdf(docInfo).download('resume.pdf')
}

document.getElementById('resumeForm').addEventListener('submit', generateResume);
