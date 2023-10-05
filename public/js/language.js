var language = localStorage.getItem('language');
// Default Language
var default_lang = 'en';
function setLanguage(lang) {
    if (document.getElementById("header-lang-img")) {
        if (lang == 'en') {
            document.getElementById("header-lang-img").src = "assets/images/flags/us.jpg";
        } else if (lang == 'bn') {
            document.getElementById("header-lang-img").src = "assets/images/flags/spain.jpg";
        } else if (lang == 'gr') {
            document.getElementById("header-lang-img").src = "assets/images/flags/germany.jpg";
        } else if (lang == 'it') {
            document.getElementById("header-lang-img").src = "assets/images/flags/italy.jpg";
        } else if (lang == 'ru') {
            document.getElementById("header-lang-img").src = "assets/images/flags/russia.jpg";
        }
        localStorage.setItem('language', lang);
        language = localStorage.getItem('language');
        getLanguage();
    }
}

// Multi language setting
function getLanguage() {
    (language == null) ? setLanguage(default_lang): false;
    $.getJSON('assets/lang/' + language + '.json', function (lang) {
        $('html').attr('lang', language);
        $.each(lang, function (index, val) {
            (index === 'head') ? $(document).attr("title", val['title']): false;
            $("[data-key='" + index + "']").text(val);
        });
    });
}
