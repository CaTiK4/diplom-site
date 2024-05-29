import { jsPDF } from "jspdf";
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
    var pdf = new jsPDF();
    pdf.text(`Full Name: ${fullName}`, 10, 10);
    pdf.text(`Email: ${email}`, 10, 20);
    pdf.text(`Phone: ${phone}`, 10, 30);
    pdf.text(`Telegram: ${telegram}`, 10, 40);
    pdf.text(`Skills:\n${skills}`, 10, 50);
    pdf.text(`Professional Areas:\n${areas}`, 10, 70);
    pdf.text(`Work Experience:\n${experience}`, 10, 90);
    pdf.text(`Education:\n${education}`, 10, 110);
    pdf.text(`Participation in Competitions: ${competitions}`, 10, 130);
    pdf.save('resume.pdf')
}

document.getElementById('resumeForm').addEventListener('submit', generateResume);
