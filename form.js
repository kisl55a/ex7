function showLanguage() {
    var language = document.getElementById('language');
    var chosenLanguage = language.options[language.selectedIndex].value;
    document.getElementById('selected_language').value = chosenLanguage;
    console.log(chosenLanguage);
}
function showPhone(phone) {

    document.getElementById('selected_phone').value = phone;

}