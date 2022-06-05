var sections = document.querySelectorAll("section");
var activeSection = "";

function getSections() {

    for (let i = 0; i < sections.length; i++) {
        let section = sections[i];

        if (section.classList.contains("active")) {
            activeSection = section;
        }
    }
}
getSections()



function removeActiveSection() {
    getSections();
    activeSection.classList.remove("active");
}



function goToDashboard() {
    removeActiveSection();
    sections[0].classList.add("active");
}

function goToAddNode() {
    removeActiveSection();
    sections[1].classList.add("active");
}

function goToSelectTemplate() {
    removeActiveSection();
    sections[2].classList.add("active");
}

function goToEditNode() {
    removeActiveSection();
    sections[3].classList.add("active");
}

function goToPublishNode() {
    removeActiveSection();
    sections[4].classList.add("active");
    
    window.scrollTo({
        top: 0,
    });
}

function publishNode() {
    removeActiveSection();
    sections[5].classList.add("active");

    const player = document.getElementById('popup-published-lottie');
    player.play();
    
    setTimeout(function() {
        window.scrollTo({
            top: 0,
        });
  goToDashboard();
}, 4000);
};

//https://lottiefiles.com/interactivity







/*

function getNavigation() {
    var navigation = document.querySelectorAll("nav");

    for (let i = 0; i < navigation.length; i++) {
        console.log(navigation[i])
    }
}
getNavigation()
*/
